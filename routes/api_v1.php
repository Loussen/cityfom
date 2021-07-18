<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('route:cache');
    return 'DONE'; //Return anything
});

// Pages
Route::post('pages/all', 'PagesController@all');
Route::post('pages/detailBySlug', 'PagesController@detailBySlug');
Route::post('pages/detailByLangAndSlug', 'PagesController@detailByLangAndSlug');

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('user/socialLogin', 'UserController@socialLogin');
Route::post('user/verifyAccount', 'UserController@verifyAccount');
Route::post('user/resendOtp', 'UserController@resendOtp');
Route::post('user/forgotPassword', 'UserController@forgotPassword');
Route::post('user/verifyOtp', 'UserController@verifyOtp');
Route::post('user/resetPassword', 'UserController@resetPassword');

Route::post('categories/all','CategoryController@all');

Route::post('stores/all','StoreController@all');
Route::post('stores/detail','StoreController@detail');

Route::group(['middleware' => 'auth:api_version'], function(){
    // Users
    Route::post('user/detail','UserController@detail');
    Route::post('user/changePassword', 'UserController@changePassword');
    Route::post('user/updateProfile', 'UserController@updateProfile');
    Route::post('user/removeSearchFilter', 'UserController@removeSearchFilter');
    Route::post('logout', 'UserController@logout');

    // Coupons
    Route::post('coupons/all', 'CouponsController@all');
    Route::post('coupons/detail', 'CouponsController@detail');
    Route::post('coupons/updateRedeem', 'CouponsController@updateRedeem');

    // Offers
    Route::post('offers/all', 'OffersController@all');
    Route::post('offers/detail', 'OffersController@detail');

    // Contact us
    Route::post('contactus', 'ContactUsController@index');

    // Favourites
    Route::post('favourite/store', 'FavouriteController@store');
    Route::post('favourite/all', 'FavouriteController@allByUserId');

    // Rating reviews
    Route::post('ratingReview/store', 'RatingReviewController@store');
    Route::post('ratingReview/allByStoreId', 'RatingReviewController@allByStoreId');
    Route::post('ratingReview/allByUserId', 'RatingReviewController@allByUserId');
    Route::post('ratingReview/likeReview', 'RatingReviewController@likeReview');

    // Reports
    Route::post('report/typeList', 'ReportController@typeList');
    Route::post('report/store', 'ReportController@store');

    // Channels & Posts
    Route::post('channels/allByStoreId', 'ChannelsController@allByStoreId');
    Route::post('channels/allByChannelId', 'ChannelsPostsController@allByChannelId');
    Route::post('channels/postDetail', 'ChannelsPostsController@detail');

    // Notifications
    Route::post('notifications/updateSetting', 'NotificationsController@updateSetting');
    Route::post('notifications/getSetting', 'NotificationsController@getSetting');
    Route::post('notifications/delete', 'NotificationsController@remove');
    Route::post('notifications/count', 'NotificationsController@count');
    Route::post('notifications/read', 'NotificationsController@read');
    Route::post('notifications/reportStore', 'NotificationsController@reportStore');
    Route::post('notifications/allByUser', 'NotificationsController@allByUser');

    // Loyalty
    Route::post('loyalty/myPoints', 'LoyaltyController@myPoints');
    Route::post('loyalty/myPointsHistory', 'LoyaltyController@myPointsHistory');

});
