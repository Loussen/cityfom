<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\CouponResource;
use App\Http\Resources\V1\NotificationResource;
use App\Models\AppUsers;
use App\Models\CouponRedeem;
use App\Models\Coupons;
use App\Models\PushNotifications;
use App\Models\ReportNotifications;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationsController extends ApiController
{
    /**
     * Update notification settings all api
     *
     * @return \Illuminate\Http\Response
     */
    public function updateSetting(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $getUser = AppUsers::find($user->id);

        $validatedData = $request->validate([
            'fav_notify' => 'required|numeric|in:1,2',
            'radius_notify' => 'sometimes|numeric|in:1,2',
            'distance' => 'required',
            'category' => 'sometimes',
            'category.*' => 'exists:categories,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $notificationSettingsData = [
            'fav_notify' => $validatedData['fav_notify'],
            'radius_notify' => $validatedData['radius_notify'],
            'distance' => $validatedData['distance'],
        ];

        $getUser->update($notificationSettingsData);

        if($request->has('category')) {
            UserCategory::where('user_id',$user->id)->delete();

            foreach ($validatedData['category'] as $category) {
                $userCategoryData = [
                    'user_id' => $user->id,
                    'category_id' => $category,
                ];

                UserCategory::create($userCategoryData);
            }
        }

        return $this->successResponse(null);
    }

    /**
     * Get notification settings api
     *
     * @return \Illuminate\Http\Response
     */
    public function getSetting(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getSettingData = DB::table('app_users AS au')
                    ->selectRaw('au.fav_notify, au.radius_notify, au.distance')
                    ->where('au.id',$user->id)
                    ->first();

        $getUserCategory = DB::table('user_category AS uc')
                    ->selectRaw('uc.category_id AS user_category_id, IFNULL(c.name_'.$validatedData['language'].',name_en) AS category_name')
                    ->join('categories AS c','c.id','=','uc.category_id')
                    ->where('uc.user_id','=',$user->id)
                    ->get();

        if($getSettingData) {
            $responseData = $getSettingData;

            foreach ($getUserCategory as $category) {
                $responseData->categories[$category->user_category_id] = $category->category_name;
            }

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Delete notification by user api
     *
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'notification_id' => 'required|numeric|exists:push_notifications,id',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $delete = PushNotifications::where('id',$validatedData['notification_id'])->where('user_id',$user->id)->delete();

        if($delete == 1)
            return $this->successResponse(null);
        else
            return $this->errorResponse('Access forbidden!', 403);
    }

    /**
     * Get notification count by user api
     *
     * @return \Illuminate\Http\Response
     */
    public function count(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $count = PushNotifications::where('user_id',$user->id)->count();

        if($count > 0)
            return $this->successResponse($count);
        else
            return $this->errorResponse('Notification not found', 404);
    }

    /**
     * Update read notification by user api
     *
     * @return \Illuminate\Http\Response
     */
    public function read(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getNotificacions = PushNotifications::where('user_id',$user->id);

        $notificationData = [
            'status' => config('global.enable'),
        ];

        $getNotificacions->update($notificationData);

        return $this->successResponse(null);
    }

    /**
     * Report notification api
     *
     * @return \Illuminate\Http\Response
     */
    public function reportStore(Request $request)
    {
        $langs = config("global.langs");

        $user = Auth::user();

        $validatedData = $request->validate([
            'notification_id' => 'required|numeric|exists:push_notifications,id',
            'reason' => 'required|string|min:3',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getExistsReport = ReportNotifications::where('user_id',$user->id)->where('notification_id',$validatedData['notification_id'])->first();

        $getNotification = PushNotifications::where('user_id',$user->id)->where('id',$validatedData['notification_id'])->first();

        if($getNotification) {
            if($getExistsReport) {
                return $this->errorResponse('Already reported on this notification.', 409);
            } else {
                $reportData = [
                    'user_id' => $user->id,
                    'notification_id' => $validatedData['notification_id'],
                    'reason' => $validatedData['reason'],
                ];

                ReportNotifications::create($reportData);
            }

            return $this->successResponse(null);
        } else {
            return $this->errorResponse('Notification not found', 404);
        }
    }

    public function allByUser(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'offset' => 'sometimes|numeric',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $validatedData['offset'] = $validatedData['offset'] ?? 0;

        $limit = config('global.paginate_count_api');

        $user = Auth::user();

        $getNotificationData = DB::table('push_notifications AS pn')
            ->selectRaw('pn.*')
            ->whereRaw("pn.user_id = " . $user->id)
            ->offset($validatedData['offset'])
            ->limit($limit)
            ->orderBy('id','DESC')
            ->get();

        if($getNotificationData->count() > 0) {
            $notificationData = NotificationResource::collection($getNotificationData);

            return $this->successResponse($notificationData);
        }

        return $this->errorResponse('Notifications not found', 404);
    }
}
