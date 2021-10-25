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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::post('/transaction', [App\Http\Controllers\LoginController::class, 'makePayment'])->name('make-payment');

// Route::get('GoogleMapAddress', [App\Http\Controllers\DashboardController::class, 'GoogleMapFilter']);
// Route::group(['prefix' => 'admin'], function(){

// 	Route::resource('login',App\Http\Controllers\Admin\LoginController::class);
// });

// Route::group(['middleware' => ['auth','customer']],function(){

// 	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });



// Route::group(['middleware' => ['auth','merchant']],function(){

// 	Route::get('/home-page', [App\Http\Controllers\HomePageController::class, 'index_page'])->name('dashboard');

// });

Route::resource('/',App\Http\Controllers\farmart\HomeController::class);

Route::group(['prefix' => 'farmart'],function(){

	Route::resource('register',App\Http\Controllers\farmart\RegisterController::class);

	Route::resource('login',App\Http\Controllers\farmart\LoginController::class);

	Route::group(['middleware'=>'auth'],function(){

		Route::resource('wishlist',App\Http\Controllers\farmart\user\WishlistController::class);

		Route::get('logout',[App\Http\Controllers\farmart\HomeController::class,'logout'])->name('logout');

	});

	Route::group(['prefix' => 'vendor'],function(){

		Route::resource('home',App\Http\Controllers\farmart\vendor\HomeController::class);

		Route::resource('login',App\Http\Controllers\farmart\vendor\LoginController::class);

		Route::get('is_email_verify',[App\Http\Controllers\farmart\vendor\LoginController::class,'is_email_verify'])->name('user.email.verify');

		Route::resource('register',App\Http\Controllers\farmart\vendor\RegisterController::class);

		Route::resource('store',App\Http\Controllers\farmart\StoreController::class);

		Route::resource('product',App\Http\Controllers\farmart\vendor\ProductController::class);

		Route::resource('dashboard',App\Http\Controllers\farmart\vendor\DashboardController::class);

	});

	Route::group(['prefix' => 'admin'],function(){

		

	});

});
