<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\CategoryResource;
use App\Http\Resources\V1\CouponResource;
use App\Http\Resources\V1\StoreResource;
use App\Models\AppUsers;
use App\Models\Configs;
use App\Models\UserSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Spatie\OpeningHours\OpeningHours;

class StoreController extends ApiController
{
    /**
     * All api
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $langs = config("global.langs");
        $apiKey = config("global.api_key");

        $validatedData = $request->validate([
            'user_id' => 'sometimes|numeric|exists:app_users,id',
            'api_key' => 'required|string|in:' . $apiKey,
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'offset' => 'sometimes|numeric',
            'device_type' => 'sometimes|numeric|min:1',
            'device_id' => 'sometimes|string|min:3',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $getStores = DB::table('stores AS s')
            ->selectRaw('s.id AS store_id, s.name AS store_name, s.address, s.type AS store_type, s.phone AS store_phone, s.hours AS opening_hours, s.special_days, s.tags, ( 6371 * acos( cos( radians(' . $validatedData['latitude'] . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $validatedData['longitude'] . ') ) + sin( radians(' . $validatedData['latitude'] . ') ) * sin( radians( latitude ) ) ) ) AS distance, GROUP_CONCAT(si.image) AS store_images')
            ->leftJoin('store_images AS si', 'si.store_id', '=', 's.id')
            ->leftJoin('store_category AS sc', 'sc.store_id', '=', 's.id')
            ->whereRaw("s.verified = " . config("global.enable") . " AND s.status = " . config("global.enable"))
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('s.id')
            ->orderBy('distance', 'ASC');

        $userSearchDistance = $userSearchOpen = false;
        $filterCount = 0;
        if (isset($validatedData['user_id']) && $validatedData['user_id'] > 0) {
            $getUser = AppUsers::find($validatedData['user_id']);

            $userData = [
                'device_type' => $validatedData["device_type"],
                'device_id' => $validatedData["device_id"],
                'last_login' => date("Y-m-d H:i:s"),
            ];

            $getUser->update($userData);

            $userSearchFind = UserSearch::where(['user_id' => $validatedData['user_id']])->first();

            if ($userSearchFind) {
                $userSearchCategory = unserialize($userSearchFind->category);
                $userSearchTag = unserialize($userSearchFind->tags);

                $userSearchCategoryArr = $userSearchTagArr = [];

                if (count($userSearchCategory) > 0) {
                    foreach ($userSearchCategory as $category) {
                        $userSearchCategoryArr[] = $category;
                    }

                    $filterCount ++;
                }

                if(count($userSearchTag) > 0) {
                    foreach ($userSearchTag as $tag) {
                        $userSearchTagArr[] = $tag;
                    }

                    $filterCount ++;
                }

                if ($userSearchFind->distance > config('global.minimum_distance')) {
                    $userSearchDistance = true;

                    $userSearchDistanceNum = $userSearchFind->distance / 1000;

                    $filterCount ++;
                }

                if ($userSearchFind->open == 1) {
                    $userSearchOpen = true;

                    $filterCount ++;
                }
            }
        }

        $request->request->add(['user_open_store' => $userSearchOpen]);

        if ($userSearchDistance === true) {
            $getStores->havingRaw('distance <= ' . $userSearchDistanceNum);
        }

        if (isset($userSearchCategoryArr) && is_array($userSearchCategoryArr) && count($userSearchCategoryArr) > 0) {
            $getStores->whereIn('sc.category_id', $userSearchCategoryArr);
        }

        if (isset($userSearchTagArr) && is_array($userSearchTagArr) && count($userSearchTagArr) > 0) {
            foreach ($userSearchTagArr as $tag) {
                $getStores->whereRaw('FIND_IN_SET("' . $tag . '",s.tags)');
            }
        }

        $stores = $getStores->get();

        if ($stores->count() > 0) {

            $storeCollection = StoreResource::collection($stores);

            $responseData['storeList'] = StoreResource::collection($storeCollection);

            $getStoresForCouponsAndOffers = DB::table('stores AS s')
                ->selectRaw('s.id AS store_id, ( 6371 * acos( cos( radians(' . $validatedData['latitude'] . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $validatedData['longitude'] . ') ) + sin( radians(' . $validatedData['latitude'] . ') ) * sin( radians( latitude ) ) ) ) AS distance')
                ->whereRaw("s.verified = " . config("global.enable") . " AND s.status = " . config("global.enable"))
                ->groupBy('s.id')
                ->orderBy('distance', 'ASC');

            if ($userSearchDistance === true) {
                $getStoresForCouponsAndOffers->havingRaw('distance <= ' . $userSearchDistanceNum);
            }

            $storeIds = $getStoresForCouponsAndOffers->get();

            $distanceCoupon = Configs::where('slug', 'distance_coupon')->first();
            $distanceOffer = Configs::where('slug', 'distance_offer')->first();
            $storeIdArrForCoupon = $storeIdArrForOffer = [];
            foreach ($storeIds as $storeId) {
                if ($storeId->distance <= $distanceCoupon->value) {
                    $storeIdArrForCoupon[] = $storeId->store_id;
                }

                $storeDistanceArrForCoupons[$storeId->store_id] = sprintf("%.2f", $storeId->distance);

                if ($storeId->distance <= $distanceOffer->value) {
                    $storeIdArrForOffer[] = $storeId->store_id;
                }

                $storeDistanceArrForOffer[$storeId->store_id] = sprintf("%.2f", $storeId->distance);
            }

            $coupons = $offers = [];
            if (count($storeIdArrForCoupon) > 0) {
                $getCoupon = DB::table('coupons AS c')
                    ->selectRaw('c.id AS coupon_id,c.title AS coupon_title,c.image AS coupon_image,c.discount AS coupon_discount,s.name AS store_name,s.id AS store_id')
                    ->join('stores AS s', 's.id', '=', 'c.store_id')
                    ->whereRaw('valid_to >= ' . date('Y-m-d') . ' AND store_id IN (' . implode(",", $storeIdArrForCoupon) . ') AND c.status = ' . config('global.enable'))
                    ->orderBy('c.id', 'DESC')
                    ->get();


                foreach ($getCoupon as $coupon) {
                    $coupons[] = [
                        'id' => $coupon->coupon_id,
                        'store_distance' => $storeCouponDistances[] = $storeDistanceArrForCoupons[$coupon->store_id],
                        'title' => $coupon->coupon_title,
                        'discount' => $coupon->coupon_discount,
                        'store_name' => $coupon->store_name,
                        'image' => (!empty($coupon->coupon_image) && File::exists(public_path() . '/uploads/coupons/' . $coupon->coupon_image)) ? asset("/uploads/coupons/" . $coupon->coupon_image) : asset("/uploads/default/no_image.png"),
                    ];
                }

                if (count($coupons) > 0) {
                    array_multisort($storeCouponDistances, $coupons);
                }
            }

            if (count($storeIdArrForOffer) > 0) {
                $getOffers = DB::table('channels_details AS cd')
                    ->selectRaw('cd.id, s.name AS store_name,s.id AS store_id,cd.title,cd.old_price,cd.price,cd.media')
                    ->join('channels AS c', 'c.id', '=', 'cd.channel_id')
                    ->join('stores AS s', 's.id', '=', 'c.store_id')
                    ->whereRaw('c.store_id IN (' . implode(',', $storeIdArrForOffer) . ') AND c.channel_category_id = ' . config('global.channel_offer_id') . ' AND c.status = ' . config('global.enable') . ' AND cd.status = ' . config('global.enable') . ' AND cd.expiration_date >= ' . (strtotime(date('Y-m-d')) * 1000))
                    ->groupBy('c.store_id')
                    ->limit(10)
                    ->get();

                if ($getOffers->count() > 0) {

                    foreach ($getOffers as $offer) {
                        $offers[] = [
                            'id' => $offer->id,
                            'store_name' => $offer->store_name,
                            'store_distance' => $storeDistanceOfferArr[] = $storeDistanceArrForOffer[$offer->store_id],
                            'title' => $offer->title,
                            'old_price' => $offer->old_price,
                            'price' => $offer->price,
                            'image' => (!empty($offer->media) && File::exists(public_path() . '/uploads/channel_posts/' . $offer->media)) ? asset("/uploads/channel_posts/" . $offer->media) : asset("/uploads/default/no_image.png"),
                        ];
                    }

                    if (count($offers) > 0) {
                        array_multisort($storeDistanceOfferArr, $offers);
                    }
                }
            }

            $responseData['couponList'] = $coupons;
            $responseData['offerList'] = $offers;
            $responseData['searchCount'] = $filterCount;

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Store not found', 404);
    }
}