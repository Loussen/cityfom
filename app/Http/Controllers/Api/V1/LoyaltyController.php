<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\LoyaltyMessageResource;
use App\Http\Resources\V1\LoyaltyPointResource;
use App\Models\LoyaltyPoints;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoyaltyController extends ApiController
{
    /**
     * My points api
     *
     * @return \Illuminate\Http\Response
     */
    public function myPoints(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $user = Auth::user();

        if ($validatedData['offset'] == 0 && $user->cms_user_id > 0) {
            $cmsChannel = new CmsController();
            $cmsPointData = $cmsChannel->userLoyaltyPointData($user->cms_user_id);

            if (count($cmsPointData) > 0) {
                foreach ($cmsPointData as $keyPoint => $valPoint) {
                    $storeExist = Stores::where(['cms_store_id' => $valPoint->organizationId, 'verified' => config('global.enable'), 'status' => config('global.enable')])->first();

                    if ($storeExist) {
                        $loyaltyPointData = DB::table('loyalty_points AS lp')
                            ->selectRaw('lp.id, lp.current')
                            ->whereRaw("lp.user_id = " . $user->id . " AND lp.store_id = " . $storeExist->id)
                            ->orderBy('id', 'DESC')
                            ->first();

                        if ($loyaltyPointData) {
                            $loyaltyExists = LoyaltyPoints::find($loyaltyPointData->id);

                            $loyaltyData = [
                                'current' => $valPoint->points,
                            ];

                            $loyaltyExists->update($loyaltyData);
                        } else {
                            $loyaltyData['user_id'] = $user->id;
                            $loyaltyData['store_id'] = $storeExist->id;
                            $loyaltyData['current'] = $valPoint->points;

                            LoyaltyPoints::create($loyaltyData);
                        }
                    }
                }
            }
        }

        $getLoyaltyData = DB::table('loyalty_points AS lp')
            ->selectRaw('lp.*, (SELECT current FROM loyalty_points WHERE user_id = ' . $user->id . ' AND store_id = lp.store_id ORDER BY id DESC LIMIT 1) AS current, (SELECT previous FROM loyalty_points WHERE user_id = ' . $user->id . ' AND store_id = lp.store_id ORDER BY id DESC LIMIT 1) AS previous, (SELECT created_at FROM loyalty_points WHERE user_id = ' . $user->id . ' AND store_id = lp.store_id ORDER BY id DESC LIMIT 1) AS created_at')
            ->whereRaw("lp.user_id = " . $user->id)
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->groupBy('lp.store_id')
            ->get();

        if ($getLoyaltyData->count() > 0) {

            $loyaltyPoints = LoyaltyPointResource::collection($getLoyaltyData);

            return $this->successResponse($loyaltyPoints);
        }

        return $this->errorResponse('Loyalty point data not found', 404);
    }

    /**
     * My points history api
     *
     * @return \Illuminate\Http\Response
     */
    public function myPointsHistory(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $user = Auth::user();

        $cmsChannel = new CmsController();
        $cmsChannel->userLoyaltyPointHistoryData($user->id,$validatedData['store_id']);

        $getLoyaltyHistoryData = DB::table('loyalty_points AS lp')
            ->selectRaw('lp.*')
            ->whereRaw("lp.user_id = " . $user->id." AND store_id = ".$validatedData['store_id'])
            ->orderBy('id','DESC')
            ->get();

        $responseData['loyalyPointsData'] = $responseData['loyalyMessagePointsData'] = [];
        if ($getLoyaltyHistoryData->count() > 0) {
            $loyaltyPointsData = LoyaltyPointResource::collection($getLoyaltyHistoryData);

            $responseData['loyalyPointsData'] = $loyaltyPointsData;
        }

        $getMessageLoyaltyData = DB::table('loyalty_messages AS lm')
            ->selectRaw('lm.*')
            ->whereRaw("lm.store_id = " . $validatedData['store_id']." AND UNIX_TIMESTAMP(lm.valid_to) >= ".strtotime(date('Y-m-d H:i:s'))." AND status = ".config('global.enable'))
            ->orderBy('id','DESC')
            ->get();

        if ($getMessageLoyaltyData->count() > 0) {
            $loyaltyMessageData = LoyaltyMessageResource::collection($getMessageLoyaltyData);

            $responseData['loyalyMessagePointsData'] = $loyaltyMessageData;
        }

        return $this->successResponse($responseData);
    }
}
