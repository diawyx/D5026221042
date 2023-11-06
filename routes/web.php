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


