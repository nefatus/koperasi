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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('master', function () {
    return view('master');
});

Route::get('index', function () {
    return view('index');
});

Route::get('petugas', function () {
    return view('petugas');
});

Route::get('anggota', function () {
    return view('anggota');
});

Route::get('simpanan', function () {
    return view('simpanan');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('forgot', function () {
    return view('forgot');
});
