<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/sejarah', [\App\Http\Controllers\PageController::class, 'sejarah'])->name('sejarah');
Route::get('/visi_dan_misi', [\App\Http\Controllers\PageController::class, 'visi_dan_misi'])->name('visi_dan_misi');
Route::get('/prestasi', [\App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
Route::get('/kontak', [\App\Http\Controllers\PageController::class, 'kontak'])->name('kontak');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
