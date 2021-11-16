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

$subjects = config('global.admin_prefix');

foreach ($subjects as $subject) {
    Route::get($subject.'/login', 'Auth\AdminAuthController@getLogin')->name($subject.'Login');
    Route::post($subject.'/login', 'Auth\AdminAuthController@postLogin')->name($subject.'LoginPost');
    Route::post($subject.'/logout', 'Auth\AdminAuthController@logout')->name($subject.'Logout');
}

//Route::get('cms/login','Auth\CmsAuthController@getLogin')->name('cmsLogin');
//Route::post('cms/login', 'Auth\CmsAuthController@postLogin')->name('cmsLoginPost');
//Route::post('cms/logout', 'Auth\CmsAuthController@logout')->name('cmsLogout');
//
//Route::get('subadmin/login','Auth\SubadminAuthController@getLogin')->name('subAdminLogin');
//Route::post('subadmin/login', 'Auth\SubadminAuthController@postLogin')->name('subAdminLoginPost');
//Route::post('subadmin/logout', 'Auth\SubadminAuthController@logout')->name('subAdminLogout');

//Route::group(['as' => 'cms.', 'prefix' => 'cms', 'middleware' => 'cmsauth', 'namespace' => 'Admin'], function() {
//
//    // Admin Dashboard
//    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
//
//    // Categories
//    Route::resource('category', 'CategoryController');
//    Route::put('changeCategoryStatus', 'CategoryController@changeCategoryStatus')->name('category.changeCategoryStatus');
//    Route::put('changeCategoryFilterType', 'CategoryController@changeCategoryFilterType')->name('category.changeCategoryFilterType');
//    Route::delete('destroyMultipleCategory', 'CategoryController@destroyMultipleCategory')->name('category.destroyMultipleCategory');
//    Route::put('filterMultipleCategory', 'CategoryController@filterMultipleCategory')->name('category.filterMultipleCategory');
//    Route::put('statusMultipleCategory', 'CategoryController@statusMultipleCategory')->name('category.statusMultipleCategory');
//});

//Route::group(['as' => 'subadmin.', 'prefix' => 'subadmin', 'middleware' => 'subadminauth', 'namespace' => 'Admin'], function() {
//
//    // Admin Dashboard
//    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
//
//    // Categories
//    Route::resource('category', 'CategoryController');
//    Route::put('changeCategoryStatus', 'CategoryController@changeCategoryStatus')->name('category.changeCategoryStatus');
//    Route::put('changeCategoryFilterType', 'CategoryController@changeCategoryFilterType')->name('category.changeCategoryFilterType');
//    Route::delete('destroyMultipleCategory', 'CategoryController@destroyMultipleCategory')->name('category.destroyMultipleCategory');
//    Route::put('filterMultipleCategory', 'CategoryController@filterMultipleCategory')->name('category.filterMultipleCategory');
//    Route::put('statusMultipleCategory', 'CategoryController@statusMultipleCategory')->name('category.statusMultipleCategory');
//});

foreach ($subjects as $subject) {
    Route::group(['as' => $subject.'.', 'prefix' => $subject, 'middleware' => 'adminauth', 'namespace' => 'Admin'], function () {

        Route::resource('cms_users', 'CmsUsersController');
        // Roles and Permissions
        Route::resource('roles', 'RoleController');
        Route::delete('destroyMultipleRole', 'RoleController@destroyMultipleRole')->name('roles.destroyMultipleRole');

        // Admin Dashboard
        Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

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

        // APP users
        Route::resource('app_users', 'AppUsersController');
        Route::put('changeAppUserStatus', 'AppUsersController@changeAppUserStatus')->name('app_users.changeAppUserStatus');
        Route::delete('destroyMultipleAppUser', 'AppUsersController@destroyMultipleAppUser')->name('app_users.destroyMultipleAppUser');
        Route::put('statusMultipleAppUser', 'AppUsersController@statusMultipleAppUser')->name('app_users.statusMultipleAppUser');

        // CMS users
        Route::put('changeCmsUserStatus', 'CmsUsersController@changeCmsUserStatus')->name('cms_users.changeCmsUserStatus');
        Route::delete('destroyMultipleCmsUser', 'CmsUsersController@destroyMultipleCmsUser')->name('cms_users.destroyMultipleCmsUser');
        Route::put('statusMultipleCmsUser', 'CmsUsersController@statusMultipleCmsUser')->name('cms_users.statusMultipleCmsUser');

        Route::post('ckeditor_upload', 'CkeditorController@upload')->name('ckeditor.upload');


    });
}

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
