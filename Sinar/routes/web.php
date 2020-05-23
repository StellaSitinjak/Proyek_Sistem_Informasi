<?php
Auth::routes();
Route::get('/', 'ContentsController@index');

Route::get('/menu', 'MenuController@index');

Route::get('/home', 'Auth\LoginController@index');
Route::get('/login', 'Auth\LoginController@login');
Route::post('/loginPost', 'Auth\LoginController@loginPost');
Route::get('/register', 'Auth\RegisterController@regisCustomer');
Route::post('/registerPost', 'Auth\RegisterController@postCustomer');
Route::get('/regisWorker', 'Auth\RegisterController@regisWorker');
Route::post('/postWorker', 'Auth\RegisterController@postWorker');
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('reservation','ReservationController');
Route::resource('resep','ResepController');

Route::get('/gallery', function () {
    return view('gallery');
});