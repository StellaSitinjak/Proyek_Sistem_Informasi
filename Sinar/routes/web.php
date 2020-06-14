<?php
Auth::routes();
Route::get('/', 'ContentsController@index');
Route::get('/home', 'Auth\UsersController@index');
Route::resource('menu','MenuController');

Route::get('/login', 'Auth\UsersController@login_index');
Route::get('/register', 'Auth\UsersController@register_index');
Route::get('/register-pegawai', 'Auth\UsersController@regisWorker');
Route::post('/registerPost', 'Auth\UsersController@register');
Route::post('/registerPost-pegawai', 'Auth\UsersController@postWorker');
Route::post('/loginPost', 'Auth\UsersController@login');
Route::get('/logout', 'Auth\UsersController@logout');

Route::resource('promo','Admin\PromoController');

Route::resource('reservation','Kasir\ReservationController');
Route::resource('billing','Kasir\BillingController');

Route::resource('resep','InventoryChef\ResepController');
Route::resource('stok','InventoryChef\StokController');

Route::resource('cart','Customer\CartController');
Route::resource('rating','Customer\RatingController');
Route::resource('booking','Customer\BookingController');

Route::get('/gallery', function () {
    return view('gallery');
});
