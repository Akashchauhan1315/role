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


Route::group(['prefix' => 'user','middleware' => 'use.ssl'],function(){

	Route::resource('home',App\Http\Controllers\Api\HomepageController::class);

	Route::resource('register',App\Http\Controllers\Api\RegisterControoler::class);

	Route::resource('login',App\Http\Controllers\LoginController::class);

    Route::group(['middleware' => 'auth:api'],function(){

    	Route::resource('customer',App\Http\Controllers\Api\CustomerController::class);

    	Route::any('logout',[App\Http\Controllers\Api\CustomerController::class,'logout']);
    });
});
