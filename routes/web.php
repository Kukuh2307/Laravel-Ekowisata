<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('/artikel', [PageController::class, 'artikel'])->name('artikel');
Route::get('/foto-gallery', [PageController::class, 'foto_gallery'])->name('foto-gallery');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/poster', [PageController::class, 'poster'])->name('poster');


