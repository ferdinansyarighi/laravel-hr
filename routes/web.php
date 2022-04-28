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

Route::get('/', function () {
    return view('login_v');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');

Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('dashboard_admin', 'App\Http\Controllers\Dashboard_c@admin')->name('dashboard_admin');
        Route::post('getData', 'App\Http\Controllers\Dashboard_c@getDAta')->name('getData');
        Route::post('saveData', 'App\Http\Controllers\Permit_c@saveData')->name('saveData');
        Route::get('permit_admin', 'App\Http\Controllers\Permit_c@admin')->name('permit_admin');
    });

    Route::group(['middleware' => ['cek_login:user']], function(){
        Route::get('dashboard', 'App\Http\Controllers\Dashboard_c@user')->name('dashboard');
    });

});