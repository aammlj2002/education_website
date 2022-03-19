<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show(Course $course, $episode)
    {
        $lesson = $course->lessons[$episode-1];
        $lesson->topic = $lesson->topic->name; // current lesson topic
    $lesson->course=$lesson->course; // related course
    $lesson->instructor= $lesson->instructor; // lesson instructor
    $lesson->comments=$lesson->comments->map(function ($comment) {
        return [
            ...$comment->toArray(),
            "commenter"=>$comment->commenter,
            "replies"=>$comment->replies->map(function ($reply) {
                return[
                   ...$reply->toArray(),
                    "commenter"=> $reply->commenter
                ];
            })
        ];
    }); // get comments
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
    }
    public function giveLike(Lesson $lesson)
    {
        if (auth()->user()->isLiked($lesson)) {
            $lesson->unlike();
        } else {
            $lesson->like();
        }
        return back();
    }
    public function addToWatchlist(Lesson $lesson)
    {
        if (auth()->user()->isWatchListed($lesson)) {
            $lesson->removeFromWatchlist();
        } else {
            $lesson->addToWatchlist();
        }
        return back();
    }
    public function markAsComplete(Lesson $lesson)
    {
        if (auth()->user()->isCompleted($lesson)) {
            $lesson->uncomplete();
        } else {
            $lesson->complete();
        }
        return back();
    }
    public function giveComment(Lesson $lesson)
    {
        $formData = request()->validate([
            "body"=>"required",
            "parent_id"=>"nullable"
        ]);
        $lesson->comments()->create([
            ...$formData,
            "user_id"=>auth()->id()
        ]);
        return back();
    }
}
