<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/me', function () {
        return inertia('MyLibrary');
    })->name('myLibrary');
    Route::get('/browse/all', function () {
        return inertia('Topics');
    })->name('topics');
    Route::get('/series', function () {
        return inertia('Series');
    })->name('series');
    Route::get('/bits', function () {
        return inertia('Bits');
    })->name('bits');
    Route::get('/discuss', function () {
        return inertia('Discussions');
    })->name('discussions');
    Route::get('/podcast', function () {
        return inertia('Podcast');
    })->name('podcast');
});
