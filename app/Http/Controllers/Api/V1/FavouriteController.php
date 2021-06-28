<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Favourites;
use App\Models\NotificationsStore;
use App\Models\NotificationsStoreUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavouriteController extends ApiController
{
    /**
     * login api
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
