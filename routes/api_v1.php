<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('user/verifyAccount', 'UserController@verifyAccount');
Route::post('user/resendOtp', 'UserController@resendOtp');
Route::post('user/verifyOtp', 'UserController@verifyOtp');

Route::group(['middleware' => 'auth:api_version'], function(){
    Route::get('categories','CategoryController@all');
    Route::get('user/detail','UserController@details');
    Route::post('user/resetPassword', 'UserController@resetPassword');
    Route::post('logout', 'UserController@logout');
});
