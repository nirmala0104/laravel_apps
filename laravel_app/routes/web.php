<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\GaleriController;

// Halaman utama -> Biodata
Route::get('/', [BiodataController::class, 'index'])->name('biodata');

// Halaman playlist
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist');

// Halaman galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
