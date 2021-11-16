<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\Channels;
use App\Models\Coupons;
use App\Models\RateReviews;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
        $moduleName = $this->module_name;
        if($moduleName == 'cms') {
            $storeIds = get_cms_user_store_ids(Auth::user()->id);

            $offerCount = Channels::whereIn('store_id',$storeIds)->where('channel_category_id',3)->where('status',config('global.enable'))->count();

            $couponCount = Coupons::whereIn('store_id', $storeIds)->where('valid_to','>=', date('Y-m-d'))->where('status', config('global.enable'))->orderBy('id','DESC')->count();

            $ratingCount = RateReviews::whereIn('store_id', $storeIds)->count();

            $favCount = DB::select(DB::raw("SELECT stores.id
FROM stores
JOIN favourites ON favourites.store_id = stores.id
WHERE stores.id IN (".implode(',',$storeIds).") and user_id > 0"));

            $favCount = count($favCount);

            $queryForFavStores = DB::select(DB::raw("SELECT `stores`.`name` as store_name, COUNT(stores.id) as fav_count
                                FROM stores
                                JOIN favourites ON favourites.store_id = stores.id
                                WHERE favourites.user_id > 0 AND stores.id IN (".implode(',',$storeIds).")
                                GROUP BY stores.id
                                ORDER BY fav_count DESC"));

            $storeName = $storeFavCount = [];
            foreach ($queryForFavStores as $keyFav => $valFav)
            {
                $storeName[] = $valFav->store_name;
                $storeFavCount[] = $valFav->fav_count;
            }

            $cmsStores = Stores::whereIn('id',$storeIds)->get();

            $viewCurrentStore = false;
            $currentStore = [];
            $currentOfferCount = $currentCouponCount = $currentRatingCount = $currentFavCount = 0;
            if($request->has('store_id')) {
                $storeId = intval($request->store_id);

                if(in_array($storeId,$storeIds)) {
                    $viewCurrentStore = true;

                    $currentStore = Stores::find($storeId);

                    $currentOfferCount = Channels::where('store_id',$storeId)->where('channel_category_id',3)->where('status',config('global.enable'))->count();

                    $currentCouponCount = Coupons::where('store_id', $storeId)->where('valid_to','>=', date('Y-m-d'))->where('status', config('global.enable'))->orderBy('id','DESC')->count();

                    $currentRatingCount = RateReviews::where('store_id', $storeId)->count();

                    $currentFavCount = DB::select(DB::raw("SELECT stores.id
FROM stores
JOIN favourites ON favourites.store_id = stores.id
WHERE stores.id = ".$storeId." and user_id > 0"));

                    $currentFavCount = count($currentFavCount);
                } else {
                    abort(404);
                    die();
                }
            }

            return view('admin.pages.dashboard.index', compact('offerCount','couponCount','ratingCount','favCount','storeName','storeFavCount','cmsStores','viewCurrentStore','currentStore','currentOfferCount','currentCouponCount','currentRatingCount','currentFavCount','moduleName'));
        } else {
            $userCount = AppUsers::query()->count();
            $storeCount = Stores::query()->count();
            $couponCount = Coupons::where(['status' => config('global.enable') ])->count();
            $ratingCount = RateReviews::query()->count();

            $userThisMonthCount = AppUsers::whereRaw('MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())')->count();
            $userPrevMonthCount = AppUsers::whereRaw('MONTH(created_at) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) AND YEAR(created_at) = YEAR(CURRENT_DATE())')->count();

            if ($userThisMonthCount != $userPrevMonthCount) {
                if($userPrevMonthCount != 0)
                    $percentMonth = $userThisMonthCount * 100 / $userPrevMonthCount - 100;
                else
                    $percentMonth = $userThisMonthCount * 100;
            } else {
                $percentMonth = 0;
            }

            $userThisWeekCount = AppUsers::whereRaw('MONTH(created_at) = MONTH(CURRENT_DATE()) AND WEEK(created_at) = WEEK(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())')->count();
            $userPrevWeekCount = AppUsers::whereRaw('MONTH(created_at) = MONTH(CURRENT_DATE()) AND WEEK(created_at) = WEEK(CURRENT_DATE() - INTERVAL 1 WEEK) AND YEAR(created_at) = YEAR(CURRENT_DATE())')->count();

            if ($userPrevWeekCount != $userThisWeekCount) {
                if($userPrevWeekCount != 0)
                    $percentWeek = $userThisWeekCount * 100 / $userPrevWeekCount - 100;
                else
                    $percentWeek = $userThisWeekCount * 100;
            } else {
                $percentWeek = 0;
            }

            $percentMonth = round($percentMonth);
            $percentWeek = round($percentWeek);

            $userThisMonthLoginCount = AppUsers::whereRaw('MONTH(last_login) = MONTH(CURRENT_DATE()) AND YEAR(last_login) = YEAR(CURRENT_DATE())')->count();
            $userPrevMonthLoginCount = AppUsers::whereRaw('MONTH(last_login) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) AND YEAR(last_login) = YEAR(CURRENT_DATE())')->count();

            if ($userThisMonthLoginCount != $userPrevMonthLoginCount) {
                if($userPrevMonthLoginCount != 0)
                    $percentMonthLogin = $userThisMonthLoginCount * 100 / $userPrevMonthLoginCount - 100;
                else
                    $percentMonthLogin = $userThisMonthLoginCount * 100;
            } else {
                $percentMonthLogin = 0;
            }

            $userThisWeekLoginCount = AppUsers::whereRaw('MONTH(last_login) = MONTH(CURRENT_DATE()) AND WEEK(last_login) = WEEK(CURRENT_DATE()) AND YEAR(last_login) = YEAR(CURRENT_DATE())')->count();
            $userPrevWeekLoginCount = AppUsers::whereRaw('MONTH(last_login) = MONTH(CURRENT_DATE()) AND WEEK(last_login) = WEEK(CURRENT_DATE() - INTERVAL 1 WEEK) AND YEAR(last_login) = YEAR(CURRENT_DATE())')->count();

            if ($userThisWeekLoginCount != $userPrevWeekLoginCount) {
                if($userPrevWeekLoginCount != 0)
                    $percentWeekLogin = $userThisWeekLoginCount * 100 / $userPrevWeekLoginCount - 100;
                else
                    $percentWeekLogin = $userThisWeekLoginCount * 100;
            } else {
                $percentWeekLogin = 0;
            }

            $percentMonthLogin = round($percentMonthLogin);
            $percentWeekLogin = round($percentWeekLogin);

            $queryForFavStores = DB::select(DB::raw("SELECT `stores`.`name` as store_name, COUNT(stores.id) as fav_count
                                FROM stores
                                JOIN favourites ON favourites.store_id = stores.id
                                WHERE favourites.user_id > 0
                                GROUP BY stores.id
                                ORDER BY fav_count DESC"));

            $storeName = $storeFavCount = [];
            foreach ($queryForFavStores as $keyFav => $valFav)
            {
                $storeName[] = $valFav->store_name;
                $storeFavCount[] = $valFav->fav_count;
            }

            return view('admin.pages.dashboard.index', compact('userCount','storeCount','couponCount','ratingCount','userThisMonthCount','userPrevMonthCount','percentMonth','userThisWeekCount','userPrevWeekCount','percentWeek','userThisMonthLoginCount','userPrevMonthLoginCount','userThisWeekLoginCount','userPrevWeekLoginCount','percentMonthLogin','percentWeekLogin','storeName','storeFavCount','moduleName'));
        }
    }
}
