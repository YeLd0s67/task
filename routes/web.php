<?php


Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/logout', 'RegisterController@logout') -> name('logout');
Route::get('/login', 'RegisterController@login') -> name('login');
Route::post('/login', 'RegisterController@insert');
Route::get('/register', 'RegisterController@register') -> name('register');
Route::post('/register', 'RegisterController@store');
