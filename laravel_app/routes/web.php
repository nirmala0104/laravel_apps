<?php

use Illuminate\Support\Facades\Route;

// Halaman Biodata (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Playlist
Route::get('/playlist', function () {
    return view('playlist');
})->name('playlist');

// Halaman Galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');
