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
   return view('Auth/login');
});

Route::get('master', function () {
    return view('master');
});

Route::get('index', function () {
    return view('index');
});

Route::get('register', function () {
    return view('register');
});

Route::get('forgot', function () {
    return view('forgot');
});

Route::get('form1', function () {
    return view('form1');
});

Route::get('form2', function () {
    return view('form2');
});

Route::get('form3', function () {
    return view('form3');
});

//Route::get('/dasboard','DashboardController@index' );

//Route::get('/login','AuthController@login');

//Route::post('/postlogin','AuthController@postlogin' );

Auth::routes();
Route::get('/home','HomeController@index');
Route::get('/home/login','HomeController@logout');
Route::get('/logout','\App\Http\Controllers\Auth\loginController@logout' );

//route CRUD 
Route::resource('petugas','petugasController');


//route CRUD 
Route::resource('anggota','AnggotaController');

//route CRUD
Route::resource('simpanan','simpananController');
