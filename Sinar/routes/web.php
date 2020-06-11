<?php
Auth::routes();
Route::get('/', 'ContentsController@index');
Route::get('/home', 'Auth\UsersController@index');

Route::get('/menu', 'MenuController@index');
Route::get('/pesan', 'MenuController@pesan');
Route::get('/rating/{id}', 'Customer\RatingController@rating');
Route::get('/ratingPost', 'Customer\RatingController@ratingPost');

Route::get('/login', 'Auth\UsersController@login_index');
Route::get('/register', 'Auth\UsersController@register_index');
Route::get('/register-pegawai', 'Auth\UsersController@regisWorker');
Route::post('/registerPost', 'Auth\UsersController@register');
Route::post('/registerPost-pegawai', 'Auth\UsersController@postWorker');
Route::post('/loginPost', 'Auth\UsersController@login');
Route::get('/logout', 'Auth\UsersController@logout');

Route::resource('promo','Admin\PromoController');
Route::resource('reservation','Kasir\ReservationController');
Route::resource('resep','InventoryChef\ResepController');
Route::resource('stok','InventoryChef\StokController');

Route::get('/gallery', function () {
    return view('gallery');
});
