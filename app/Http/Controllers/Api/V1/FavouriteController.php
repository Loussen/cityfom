<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\StoreResource;
use App\Models\Favourites;
use App\Models\NotificationsStore;
use App\Models\NotificationsStoreUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavouriteController extends ApiController
{

    /**
     * all by user ID api
     *
     * @return \Illuminate\Http\Response
     */
    public function allByUserId(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $getStores = DB::table('stores AS s')
            ->selectRaw('s.id AS store_id, s.name AS store_name, s.address, s.type AS store_type, s.description AS store_description, s.email AS store_email, s.website AS store_website, s.facebook AS store_facebook, s.twitter AS store_twitter, s.instagram AS store_instagram, s.latitude AS store_latitude, s.longitude AS store_longitude, s.phone AS store_phone, s.hours AS opening_hours, s.special_days, s.tags, ( 6371 * acos( cos( radians(' . $validatedData['latitude'] . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $validatedData['longitude'] . ') ) + sin( radians(' . $validatedData['latitude'] . ') ) * sin( radians( latitude ) ) ) ) AS distance, GROUP_CONCAT(si.image) AS store_images')
            ->leftJoin('store_images AS si', 'si.store_id', '=', 's.id')
            ->leftJoin('store_category AS sc', 'sc.store_id', '=', 's.id')
            ->join('favourites AS f','f.store_id','=','s.id')
            ->whereRaw("s.verified = " . config("global.enable") . " AND s.status = " . config("global.enable")." AND f.user_id = ".$user->id)
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('s.id')
            ->orderBy('distance', 'ASC')
            ->get();

        if($getStores->count() > 0) {
            $storeCollection = StoreResource::collection($getStores);

            return $this->successResponse($storeCollection);
        }

        return $this->errorResponse('Favourite store not found', 404);
    }

    /**
     * store api
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $existsFavourite = Favourites::where('user_id',$user->id)->where('store_id',$validatedData['store_id'])->first();

        if($existsFavourite) {

            $existsFavourite->delete();

            $favouriteType = 1;

        } else {

            $favouriteData = [
                'user_id' => $user->id,
                'store_id' => $validatedData['store_id']
            ];

            Favourites::create($favouriteData);

            $favouriteType = 2;
        }

        $notificationStoreData = [
            'store_id' => $validatedData['store_id'],
            'inserted_by'  => $user->id,
            'type'  => 4,
        ];

        $notificationStore = NotificationsStore::create($notificationStoreData);

        $getStoreUsers = DB::table('cms_users')->whereRaw('FIND_IN_SET(\'' . $validatedData['store_id'] . '\',store_ids)')->get();

        if($getStoreUsers) {
            foreach ($getStoreUsers as $users) {
                $notificationStoreUsersData = [
                    'notification_id' => $notificationStore->id,
                    'user_id' => $users->id
                ];

                NotificationsStoreUsers::create($notificationStoreUsersData);
            }
        }

        return $this->successResponse(null,$favouriteType == 1 ? 'Store removed from favourite successfully.' : 'Store added in favourite successfully.');
    }

}
