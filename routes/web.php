<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'LandingController@index')->name('index');
Route::get('/kategori/{kategori}', 'LandingController@kategori')->name('kategori');
Route::get('/peraturan/detail/{id}', 'LandingController@detail')->name('peraturan.detail');
Route::get('/dokumen/{dokumen}', 'LandingController@dokumen')->name('dokumen');
Route::get('/image/{image}', 'LandingController@image')->name('image');
Route::post('/pencarian', 'LandingController@pencarian')->name('pencarian');
Route::get('/profil', 'LandingController@profil')->name('profil');
Route::get('/kontak', 'LandingController@kontak')->name('kontak');
Route::get('/berita', 'LandingController@berita')->name('berita');
Route::get('/produk/hukum', 'LandingController@produk_hukum')->name('produk_hukum');
Route::get('/berita/{berita}/detail', 'LandingController@berita_detail')->name('berita.detail');
Route::get('/propemperda', 'LandingController@propemperda')->name('propemperda');
Route::get('/bankumaskin', 'LandingController@bankumaskin')->name('bankumaskin');
Route::get('/statistik', 'LandingController@statistik')->name('statistik');
Route::post('/surveygender', 'LandingController@simpan_surveygender')->name('simpan_surveygender');

//File
Route::get('/file/berita/{file}', 'FileController@file_berita')->name('file.berita');
Route::get('/file/{file}/{status}', 'FileController@show')->name('file.show');
Route::get('/download/{passcode}/{file}', 'FileController@download')->name('file.download');

Route::get('/login', function () {
    return view('auth.login')->name('login');
});

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');