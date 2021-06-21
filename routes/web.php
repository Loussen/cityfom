<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'adminauth', 'namespace' => 'Admin'], function () {
    // Admin Dashboard
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');

    // Categories
    Route::resource('category', 'CategoryController');
    Route::put('changeCategoryStatus', 'CategoryController@changeCategoryStatus')->name('category.changeCategoryStatus');
    Route::put('changeCategoryFilterType', 'CategoryController@changeCategoryFilterType')->name('category.changeCategoryFilterType');
    Route::delete('destroyMultipleCategory', 'CategoryController@destroyMultipleCategory')->name('category.destroyMultipleCategory');
    Route::put('filterMultipleCategory', 'CategoryController@filterMultipleCategory')->name('category.filterMultipleCategory');
    Route::put('statusMultipleCategory', 'CategoryController@statusMultipleCategory')->name('category.statusMultipleCategory');

    // Coupons
    Route::resource('coupon', 'CouponController');
    Route::put('changeCouponStatus', 'CouponController@changeCouponStatus')->name('coupon.changeCouponStatus');
    Route::delete('destroyMultipleCoupon', 'CouponController@destroyMultipleCoupon')->name('coupon.destroyMultipleCoupon');
    Route::put('statusMultipleCoupon', 'CouponController@statusMultipleCoupon')->name('coupon.statusMultipleCoupon');

    // Rating&Reviews
    Route::resource('rating_review', 'RatingReviewController');
    Route::put('changeRatingReviewStatus', 'RatingReviewController@changeRatingReviewStatus')->name('rating_review.changeRatingReviewStatus');
    Route::delete('destroyMultipleRatingReview', 'RatingReviewController@destroyMultipleRatingReview')->name('rating_review.destroyMultipleRatingReview');
    Route::put('statusMultipleRatingReview', 'RatingReviewController@statusMultipleRatingReview')->name('rating_review.statusMultipleRatingReview');
    Route::delete('destroyImage', 'RatingReviewController@destroyImage')->name('rating_review.destroyImage');

    //Content
    Route::resource('cms_pages', 'CmsPagesController');
    Route::put('changeCmsPageStatus', 'CmsPagesController@changeCmsPageStatus')->name('cms_pages.changeCmsPageStatus');
    Route::put('statusMultipleCmsPage', 'CmsPagesController@statusMultipleCmsPage')->name('cms_pages.statusMultipleCmsPage');

    //Report for notification
    Route::resource('report_notification', 'ReportNotificationController');

    //Report for store
    Route::resource('report_store', 'ReportStoreController');
    Route::put('changeReportStoreStatus', 'ReportStoreController@changeReportStoreStatus')->name('report_store.changeReportStoreStatus');
    Route::delete('destroyMultipleReportStore', 'ReportStoreController@destroyMultipleReportStore')->name('report_store.destroyMultipleReportStore');
    Route::put('statusMultipleReportStore', 'ReportStoreController@statusMultipleReportStore')->name('report_store.statusMultipleReportStore');

    //Report type for store
    Route::resource('report_type', 'ReportTypeController');
    Route::put('changeReportTypeStatus', 'ReportTypeController@changeReportTypeStatus')->name('report_type.changeReportTypeStatus');
    Route::delete('destroyMultipleReportType', 'ReportTypeController@destroyMultipleReportType')->name('report_type.destroyMultipleReportType');
    Route::put('statusMultipleReportType', 'ReportTypeController@statusMultipleReportType')->name('report_type.statusMultipleReportType');

    // Channels
    Route::resource('channel', 'ChannelController');
    Route::put('changeChannelStatus', 'ChannelController@changeChannelStatus')->name('channel.changeChannelStatus');
    Route::delete('destroyMultipleChannel', 'ChannelController@destroyMultipleChannel')->name('channel.destroyMultipleChannel');
    Route::put('statusMultipleChannel', 'ChannelController@statusMultipleChannel')->name('channel.statusMultipleChannel');

    // Channel's posts
    Route::resource('channel_post', 'ChannelPostController');
    Route::put('changeChannelPostStatus', 'ChannelPostController@changeChannelPostStatus')->name('channel_post.changeChannelPostStatus');
    Route::delete('destroyMultipleChannelPost', 'ChannelPostController@destroyMultipleChannelPost')->name('channel_post.destroyMultipleChannelPost');
    Route::put('statusMultipleChannelPost', 'ChannelPostController@statusMultipleChannelPost')->name('channel_post.statusMultipleChannelPost');
    Route::get('channelCategoryFilter', 'ChannelPostController@channelCategoryFilter')->name('channel_post.channelCategoryFilter');

    //Email templates
    Route::resource('email_templates', 'EmailTemplatesController');
    Route::put('changeEmailTemplateStatus', 'EmailTemplatesController@changeEmailTemplateStatus')->name('email_templates.changeEmailTemplateStatus');
    Route::put('statusMultipleEmailTemplate', 'EmailTemplatesController@statusMultipleEmailTemplate')->name('email_templates.statusMultipleEmailTemplate');

    //General messages
    Route::resource('general_message', 'GeneralMessageController');
    Route::put('changeGeneralMessageStatus', 'GeneralMessageController@changeGeneralMessageStatus')->name('general_message.changeGeneralMessageStatus');
    Route::delete('destroyMultipleGeneralMessage', 'GeneralMessageController@destroyMultipleGeneralMessage')->name('general_message.destroyMultipleGeneralMessage');
    Route::put('statusMultipleGeneralMessage', 'GeneralMessageController@statusMultipleGeneralMessage')->name('general_message.statusMultipleGeneralMessage');

    // Loyalty messages (Conditions)
    Route::resource('loyalty_message', 'LoyaltyMessageController');
    Route::put('changeLoyaltyMessageStatus', 'LoyaltyMessageController@changeLoyaltyMessageStatus')->name('loyalty_message.changeLoyaltyMessageStatus');
    Route::delete('destroyMultipleLoyaltyMessage', 'LoyaltyMessageController@destroyMultipleLoyaltyMessage')->name('loyalty_message.destroyMultipleLoyaltyMessage');
    Route::put('statusMultipleLoyaltyMessage', 'LoyaltyMessageController@statusMultipleLoyaltyMessage')->name('loyalty_message.statusMultipleLoyaltyMessage');

    // Loyalty points
    Route::resource('loyalty_point', 'LoyaltyPointController');
    Route::delete('destroyMultipleLoyaltyPoint', 'LoyaltyPointController@destroyMultipleLoyaltyPoint')->name('loyalty_point.destroyMultipleLoyaltyPoint');
    Route::post('pointHistory', 'LoyaltyPointController@pointHistory')->name('loyalty_point.pointHistory');

    // Settings
    Route::get('settings/configs', 'SettingsController@configs')->name('configs.configs');
    Route::put('settings/configStore', 'SettingsController@configStore')->name('configs.configStore');
    Route::get('settings/password', 'SettingsController@password')->name('password.password');
    Route::put('settings/passwordStore', 'SettingsController@passwordStore')->name('password.passwordStore');
    Route::get('settings/profile', 'SettingsController@profile')->name('profile.profile');
    Route::put('settings/profileStore', 'SettingsController@profileStore')->name('profile.profileStore');

    // Stores
    Route::resource('store', 'StoreController');
    Route::put('changeStoreStatus', 'StoreController@changeStoreStatus')->name('store.changeStoreStatus');
    Route::put('changeStorePartnerType', 'StoreController@changeStorePartnerType')->name('store.changeStorePartnerType');
    Route::put('changeStoreVerification', 'StoreController@changeStoreVerification')->name('store.changeStoreVerification');
    Route::delete('destroyMultipleStore', 'StoreController@destroyMultipleStore')->name('store.destroyMultipleStore');
    Route::put('typeMultipleStore', 'StoreController@typeMultipleStore')->name('store.typeMultipleStore');
    Route::put('statusMultipleStore', 'StoreController@statusMultipleStore')->name('store.statusMultipleStore');
    Route::delete('destroyStoreImage', 'StoreController@destroyStoreImage')->name('store.destroyStoreImage');

    Route::post('ckeditor_upload', 'CkeditorController@upload')->name('ckeditor.upload');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
