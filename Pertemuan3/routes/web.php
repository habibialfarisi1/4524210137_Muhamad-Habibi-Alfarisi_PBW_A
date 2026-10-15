<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('contact');