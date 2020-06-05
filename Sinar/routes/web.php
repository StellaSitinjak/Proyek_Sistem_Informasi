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
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/', 'ContentsController@index');
Route::get('/menu', 'ContentsController@menu');
Route::get('/rating/{id}', 'Customer\RatingController@rating');
Route::get('/ratingPost', 'Customer\RatingController@ratingPost');
Route::get('/loginPost', 'Auth\LoginController@loginPost');

Route::resource('promo','Admin\PromoController');
Route::resource('rating','Customer\RateController');
Route::resource('reservation','Kasir\ReservationController');
Route::resource('resep','InventoryChef\ResepController');
Route::resource('stok','InventoryChef\StokController');

Route::get('/gallery', function () {
    return view('gallery');
});