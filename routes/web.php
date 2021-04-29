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
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

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

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
