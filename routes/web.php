<?php

use App\Models\Category;
use App\Models\Course;
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
            "categories"=>Category::all(),
            "topics"=>Topic::all(),
            "courses"=>[]
        ]);
    })->name('topics');
    Route::get('/browse/{category:slug}', function (Category $category) {
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>$category->topics,
            "courses"=>[]
        ]);
    });
    Route::get('/topics/{topic:slug}', function (Topic $topic) {
        $courses =$topic->courses;
        $category = $topic->category;
        $topics = $category->topics;
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>$topics,
            "courses"=>$courses
        ]);
    });
    Route::get('/courses', function () {
        return inertia('Courses', [
            "courses"=>Course::all()
        ]);
    })->name('courses');
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
