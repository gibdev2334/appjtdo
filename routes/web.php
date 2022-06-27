<?php

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

// Route::get('/env', function () {
//     dd(env('DB_DATABASE'));
// });

// Route::get('/', 'HomeController@index');

// Main page
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');


// Site= Shop
// Route::get('/shop', 'HomeController@shop')->name('shop.index');
Route::get('/shop', 'ShopController@index')->name('shop.index');


// Route::get('/shop/single-vestige', 'HomeController@vestige')->name('shop.show');
// Route::get('/shop/single-vestige', 'ShopController@show')->name('shop.show');
Route::get('/shop/{vestige}', 'ShopController@show')->name('shop.show');

// Reservation=Cart
Route::get('/reservation', 'HomeController@reservation')->name('reservation.index');


// Checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@success')->name('checkout.success');

// Visites=Orders
Route::get('/visites', 'HomeController@visites')->name('visites');


// Authentification
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function() {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');



