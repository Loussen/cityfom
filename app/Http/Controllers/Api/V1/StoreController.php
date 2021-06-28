<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\CategoryResource;
use App\Http\Resources\V1\StoreResource;
use App\Models\AppUsers;
use App\Models\UserSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'api_key' => 'required|string|in:'.$apiKey,
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'offset' => 'sometimes|numeric',
            'device_type' => 'sometimes|numeric|min:1',
            'device_id' => 'sometimes|string|min:3',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $userSearchDistance = $userSearchOpen = false;
        if(isset($validatedData['user_id']) && $validatedData['user_id'] > 0) {
            $getUser = AppUsers::find($validatedData['user_id']);

            $userData = [
                'device_type' => $validatedData["device_type"],
                'device_id' => $validatedData["device_id"],
                'last_login' => date("Y-m-d H:i:s"),
            ];

            $getUser->update($userData);

            $userSearchFind = UserSearch::where(['user_id' => $validatedData['user_id']])->first();

            if($userSearchFind) {
                $userSearchCategory = unserialize($userSearchFind->category);
                $userSearchTag = unserialize($userSearchFind->tags);

                $userSearchCategoryArr = $userSearchTagArr = [];

                foreach ($userSearchCategory as $category) {
                    $userSearchCategoryArr[] = $category;
                }

                foreach ($userSearchTag as $tag) {
                    $userSearchTagArr[] = $tag;
                }

                if($userSearchFind->distance > config('global.minimum_distance')) {
                    $userSearchDistance = true;

                    $userSearchDistanceNum = $userSearchFind->distance / 1000;
                }

                if($userSearchFind->open == 1) {
                    $userSearchOpen = true;
                }
            }
        }

        $getStores = DB::table('stores AS s')
            ->selectRaw('s.id AS store_id, s.name AS store_name, s.address, s.type AS store_type, s.phone AS store_phone, s.hours AS opening_hours, s.special_days, ( 6371 * acos( cos( radians('.$validatedData['latitude'].') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$validatedData['longitude'].') ) + sin( radians('.$validatedData['latitude'].') ) * sin( radians( latitude ) ) ) ) AS distance, GROUP_CONCAT(si.image) AS store_images')
            ->leftJoin('store_images AS si','si.store_id','=','s.id')
            ->whereRaw("s.verified = ".config("global.enable")." AND s.status = ".config("global.enable"))
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('s.id')
            ->orderBy('distance','ASC');

        if($userSearchDistance === true) {
            $getStores->havingRaw('distance <= '.$userSearchDistanceNum);
        }

        $stores = $getStores->get();

        if($stores->count() > 0) {
            $responseData['storeList'] = StoreResource::collection($stores);

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('Coupon not found', 404);
    }
}
