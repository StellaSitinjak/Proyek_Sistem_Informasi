<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/reservation', function () {
    return view('User.reservation');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/home', 'Auth\LoginController@index');
Route::get('/login', 'Auth\LoginController@login');
Route::post('/loginPost', 'Auth\LoginController@loginPost');
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/registerPost', 'Auth\RegisterController@registerPost');
Route::get('/logout', 'Auth\LoginController@logout');