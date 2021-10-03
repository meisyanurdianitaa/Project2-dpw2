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
    return view('index');
});

Route::get('/brand', function () {
    return view('brand');
});

Route::get('/shoes', function () {
    return view('shoes');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/detail', function () {
    return view('detail');
});