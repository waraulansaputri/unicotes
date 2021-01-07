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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Halaman Awal
Route::get('/', function () {
    return view('welcome');
});

// Autentikasi Login Register Logout
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
// Route::get('/lock', 'Auth\LoginController@lock');

// Route Mahasiswa
Route::resource('mahasiswa','MahasiswaController');


// Route Tugas Akhir
Route::resource('tugasakhir','TugasakhirController');


// Route User
Route::resource('user','UserController');
Route::get('/user/{id}/profil', 'UserController@profil');

// Route welcome (beranda)
Route::get('/welcome', function () {
    return view('welcome');
});

//Route Lockscreen
Route::get('/lock', function () {
    return view('lockscreen');
});
