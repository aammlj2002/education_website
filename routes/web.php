<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TopicController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Topic;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/me', [HomeController::class, "watchlist"])->name('myLibrary');
    Route::get('/browse/all', [TopicController::class, "index"])->name('topics');
    Route::get('/browse/{category:slug}', [TopicController::class, "topicByCategory"]);
    Route::get('/topics/{topic:slug}', [TopicController::class, "show"]);
    Route::get('/courses', [CourseController::class, "index"])->name('courses');
    Route::get("/courses/{course:slug}", [CourseController::class, "show"]);
    Route::get("/courses/{course:slug}/lessons/{episode}", [LessonController::class, "show"]);
    Route::post("/lessons/{lesson}/like", [LessonController::class, "giveLike"]);
    Route::post("/lessons/{lesson}/complete", [LessonController::class, "markAsComplete"]);
    Route::post("/lessons/{lesson}/addToWatchList", [LessonController::class, "addToWatchlist"]);
    Route::post("/lessons/{lesson}/comment/create", [LessonController::class, "giveComment"]);
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
