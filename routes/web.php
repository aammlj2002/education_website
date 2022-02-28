<?php

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Console\Application;
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
        return inertia('Topics', [
            "topics"=>Topic::all(),
            "categories"=>Category::all()
        ]);
    })->name('topics');
    Route::get('/browse/{category:slug}', function (Category $category) {
        $topic = Topic::all();
        $topics = $topic->where("category_id", $category->id);
        return inertia('Topics', [
            "topics"=>$topics,
            "categories"=>Category::all()
        ]);
    })->name('topic');
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
