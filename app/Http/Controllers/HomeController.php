<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
    public function watchlist()
    {
        $lessons = auth()->user()->watchlist->map(function ($lesson) {
            return [
                ...$lesson->toArray(),
                "topic"=>$lesson->topic,
                "course"=>$lesson->course,
            ];
        });
        return inertia('MyLibrary', [
            "watchlistedLessons"=>$lessons
        ]);
    }
}
