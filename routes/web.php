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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wallet', function () {
    return view('wallet');
});
Auth::routes('');

Route::resource('/home', 'HomeController');

Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/detail', function () {
    return view('detail');
});
