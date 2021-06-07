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
    return 'DONE'; //Return anything
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('user/socialLogin', 'UserController@socialLogin');
Route::post('user/verifyAccount', 'UserController@verifyAccount');
Route::post('user/resendOtp', 'UserController@resendOtp');
Route::post('user/forgotPassword', 'UserController@forgotPassword');
Route::post('user/verifyOtp', 'UserController@verifyOtp');
Route::post('user/resetPassword', 'UserController@resetPassword');

Route::group(['middleware' => 'auth:api_version'], function(){
    Route::get('categories','CategoryController@all');

    // Users
    Route::post('user/detail','UserController@details');
    Route::post('user/changePassword', 'UserController@changePassword');
    Route::post('user/updateProfile', 'UserController@updateProfile');
    Route::post('logout', 'UserController@logout');

    // Pages
    Route::post('pages/all', 'PagesController@all');
    Route::post('pages/detailsBySlug', 'PagesController@detailsBySlug');
    Route::post('pages/detailsByLangAndSlug', 'PagesController@detailsByLangAndSlug');
});
