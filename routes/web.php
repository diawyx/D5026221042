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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "Halo, selamat datang rek";
});

Route::get('/halo2', function () {
    return "<marquee>Ini marquee</marquee>";
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/perkalian' , 'App\Http\Controllers\DosenController@index') ;

Route::get('show' , 'App\Http\Controllers\DosenController@showBlog') ;

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

Route::get('/mouse','App\Http\Controllers\MouseController@index3');
Route::get('/mouse/tambah3','App\Http\Controllers\MouseController@tambah3');
Route::post('/mouse/store','App\Http\Controllers\MouseController@store');
Route::get('/mouse/edit3/{kodemouse}','App\Http\Controllers\MouseController@edit3');
Route::post('/mouse/update','App\Http\Controllers\MouseController@update');
Route::get('/mouse/hapus/{kodemouse}','App\Http\Controllers\MouseController@hapus');
Route::get('/mouse/view3/{kodemouse}','App\Http\Controllers\MouseController@view3');
Route::get('/mouse/cari','App\Http\Controllers\MouseController@cari');

Route::get('/kategori','App\Http\Controllers\KategoriController@index4');
Route::post('/hasilcombo','App\Http\Controllers\KategoriController@hasilcombo');









