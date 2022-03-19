<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>Topic::all(),
            "courses"=>[]
        ]);
    }
    public function show(Topic $topic)
    {
        $courses =$topic->courses;
        $courses->map(function ($course) {
            return $course->lesson_count = $course->lessons->count();
        });
        $currentCategory = $topic->category;
        $topics = $currentCategory->topics;
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>$topics,
            "courses"=>$courses,
            "currentCategory"=>$currentCategory->slug
        ]);
    }
    public function topicByCategory(Category $category)
    {
        return inertia('Topics', [
            "categories"=>Category::all(),
            "topics"=>$category->topics,
            "courses"=>[]
        ]);
    }
}
