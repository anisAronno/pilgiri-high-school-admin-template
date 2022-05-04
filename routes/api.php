<?php

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

Route::namespace ('\App\Http\Controllers\Api\V1')->group(function () {
    Route::prefix('v1')->group(function () {

        route::apiResource('user', 'UserController')->except('update');
        route::post('user/update/{user}', 'UserController@update');

        Route::post('login', 'Auth\LoginController@login')->name('user.login');
        Route::post('registration', 'Auth\LoginController@registration')->name('user.registration');
        Route::post('send-otp', 'Auth\LoginController@sendOtp')->name('user.verify');

        Route::prefix('user')->middleware('auth:api')->group(function () {
            Route::post('profile/{id}', 'Auth\LoginController@getLoggedUserDetails')->name('client.profile');
            Route::post('logout', 'Auth\LoginController@logout')->name('user.logout');
            Route::post('all-user', 'Auth\LoginController@getAllUsers')->name('user.all');
        });
    });
});
