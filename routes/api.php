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

Route::namespace('\App\Http\Controllers\Api\V1')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::post('signin', 'Auth\AuthController@login');
        Route::post('signup', 'Auth\AuthController@signin');
        Route::prefix('user')->middleware('auth:api')->group(function () {
            Route::get('profile', 'Auth\AuthController@profile');
            Route::post('logout', 'Auth\AuthController@logout');
            Route::put('update/{user}', 'Auth\AuthController@update');
            Route::put('password-update/{user}', 'Auth\AuthController@passwordUpdate');
            Route::get('registration', 'RegistrationController@index');
            Route::post('registration', 'RegistrationController@store');
            Route::get('registration/{registration}', 'RegistrationController@show');
            Route::put('registration/{registration}', 'RegistrationController@update');
            Route::delete('registration/{registration}', 'RegistrationController@destroy');
        });
    });
});
