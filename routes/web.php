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

    Route::resource('category', 'CategoryController');
    Route::resource('coupon', 'CouponController');

    // Categories
    Route::put('changeCategoryStatus', 'CategoryController@changeCategoryStatus')->name('category.changeCategoryStatus');
    Route::put('changeCategoryFilterType', 'CategoryController@changeCategoryFilterType')->name('category.changeCategoryFilterType');
    Route::delete('destroyMultipleCategory', 'CategoryController@destroyMultipleCategory')->name('category.destroyMultipleCategory');
    Route::put('filterMultipleCategory', 'CategoryController@filterMultipleCategory')->name('category.filterMultipleCategory');
    Route::put('statusMultipleCategory', 'CategoryController@statusMultipleCategory')->name('category.statusMultipleCategory');

    // Coupons
    Route::put('changeCouponStatus', 'CouponController@changeCouponStatus')->name('coupon.changeCouponStatus');
    Route::delete('destroyMultipleCoupon', 'CouponController@destroyMultipleCoupon')->name('coupon.destroyMultipleCoupon');
    Route::put('statusMultipleCoupon', 'CouponController@statusMultipleCoupon')->name('coupon.statusMultipleCoupon');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
