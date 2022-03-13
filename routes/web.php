<?php

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
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
        return inertia('MyLibrary', [
            "watchlistedLessons"=>auth()->user()->watchlist
        ]);
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
        $currentCategory = $topic->category;
        $topics = $currentCategory->topics;
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>$topics,
            "courses"=>$courses,
            "currentCategory"=>$currentCategory->slug
        ]);
    });
    Route::get('/courses', function () {
        return inertia('Courses', [
            "courses"=>Course::all()
        ]);
    })->name('courses');
    Route::get("/courses/{course:slug}", function (Course $course) {
        return inertia("Courses", [
            "lessons"=>$course->lessons,
            "course"=>$course
        ]);
    });
    Route::get("/courses/{course:slug}/lessons/{episode}", function (Course $course, $episode) {
        $lesson = $course->lessons[$episode-1]; //current lesson
        $lesson["topic"] = $lesson->topic->name; // current lesson topic
        $lesson["episode"]= $episode; // episode number
        $lesson["course"]=$lesson->course; // related course
        $lesson["instructor"]= $lesson->instructor; // lesson instructor
        
        if ($episode > 1) {
            $lesson["previous"]= "/courses/$course->slug/lessons/". $episode - 1;
        } // previous lesson
        if ($episode < $course->lessons->count()) {
            $lesson["next"]= "/courses/$course->slug/lessons/". $episode + 1;
        } // next lesson
        return inertia("Lesson", [
            "lessons"=>$course->lessons,
            "currentLesson"=>[
                ...$lesson->toArray(),
                "completed" => auth()->user()->isCompleted($lesson), // is complete
                "liked" => auth()->user()->isLiked($lesson), // is liked
                "watchlisted" => auth()->user()->isWatchlisted($lesson), // is watchlisted
            ]
        ]);
    });
    Route::post("/lessons/{lesson}/like", function (Lesson $lesson) {
        if (auth()->user()->isLiked($lesson)) {
            $lesson->unlike();
        } else {
            $lesson->like();
        }
        return back();
    });
    Route::post("/lessons/{lesson}/complete", function (Lesson $lesson) {
        if (auth()->user()->isCompleted($lesson)) {
            $lesson->uncomplete();
        } else {
            $lesson->complete();
        }
        return back();
    });
    Route::post("/lessons/{lesson}/addToWatchList", function (Lesson $lesson) {
        if (auth()->user()->isWatchListed($lesson)) {
            $lesson->removeFromWatchlist();
        } else {
            $lesson->addToWatchlist();
        }
        return back();
    });
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
