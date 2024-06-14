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
    return view('user.news');
})->name('berita');

Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');