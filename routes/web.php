<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');

Route::get('/berita', function () {
    return view('user.berita');
})->name('berita');

Route::get('/detailberita1', function () {
    return view('user.detailberita1');
})->name('detailberita1');

Route::get('/detailberita2', function () {
    return view('user.detailberita2');
})->name('detailberita2');


Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');