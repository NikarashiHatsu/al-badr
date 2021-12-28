<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/sejarah', [\App\Http\Controllers\PageController::class, 'sejarah'])->name('sejarah');
Route::get('/visi_dan_misi', [\App\Http\Controllers\PageController::class, 'visi_dan_misi'])->name('visi_dan_misi');
Route::get('/prestasi', [\App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
Route::get('/kontak', [\App\Http\Controllers\PageController::class, 'kontak'])->name('kontak');
Route::get('/blog', [\App\Http\Controllers\PageController::class, 'blog'])->name('blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'auth.admin'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'verified', 'auth.admin',]], function() {
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
});

require __DIR__.'/auth.php';
