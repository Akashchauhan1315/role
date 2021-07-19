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
    return view('welcome');
});

Auth::routes();

Route::post('/transaction', [App\Http\Controllers\LoginController::class, 'makePayment'])->name('make-payment');


Route::group(['prefix' => 'admin'], function()
{

	Route::resource('login',App\Http\Controllers\Admin\LoginController::class);
});

Route::group(['middleware' => ['auth','customer']],function(){

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



Route::group(['middleware' => ['auth','merchant']],function(){

	Route::get('/home-page', [App\Http\Controllers\HomePageController::class, 'index_page'])->name('dashboard');

});
