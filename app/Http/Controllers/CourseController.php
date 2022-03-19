<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $courses->map(function ($course) {
            return $course->lesson_count = $course->lessons->count();
        });
        return inertia('Courses', [
        "courses"=>$courses
    ]);
    }
    public function show(Course $course)
    {
        $course->lesson_count = $course->lessons->count();
        return inertia("Courses", [
            "lessons"=>$course->lessons,
            "course"=>$course
        ]);
    }
}
