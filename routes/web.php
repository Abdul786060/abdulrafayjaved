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
    return view('index');
});
Route::get('/sofware_engineering', function () {
    return view('sofware_engineering');
});

Route::get('/semester', function () {
    return view('semester');
});

Route::get('/introduction_to_ict', function () {
    return view('introduction_to_ict');
});
Route::get('/ictvieww', function () {
    return view('ictvieww');
});
Route::get('/ictupdate', function () {
    return view('ictupdate');
});
Route::get('/ictdelete', function () {
    return view('ictdelete');
});
Route::get('/profile', function () {
    return view('profile');
});