<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/sejarah', [\App\Http\Controllers\PageController::class, 'sejarah'])->name('sejarah');
Route::get('/visi_dan_misi', [\App\Http\Controllers\PageController::class, 'visi_dan_misi'])->name('visi_dan_misi');
Route::get('/prestasi', [\App\Http\Controllers\PageController::class, 'prestasi'])->name('prestasi');
Route::get('/kontak', [\App\Http\Controllers\PageController::class, 'kontak'])->name('kontak');
Route::get('/blog', [\App\Http\Controllers\PageController::class, 'blog'])->name('blog');

Route::prefix('dashboard')
    ->as('dashboard.')
    ->middleware(['auth', 'verified', 'auth.admin'])
    ->group(function() {
        Route::get('', \App\Http\Livewire\Dashboard\Index::class)->name('index');

        Route::get('category', \App\Http\Livewire\Dashboard\Category\Index::class)->name('category.index');
        Route::get('category/create', \App\Http\Livewire\Dashboard\Category\Create::class)->name('category.create');
        Route::get('category/{category}/edit', \App\Http\Livewire\Dashboard\Category\Edit::class)->name('category.edit');

        Route::get('history', \App\Http\Livewire\Dashboard\History\Index::class)->name('history.index');
        Route::get('history/create', \App\Http\Livewire\Dashboard\History\Create::class)->name('history.create');
        Route::get('history/{history}/edit', \App\Http\Livewire\Dashboard\History\Edit::class)->name('history.edit');
    });

require __DIR__.'/auth.php';
