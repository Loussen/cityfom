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
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
