<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function instructor()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function completes()
    {
        return $this->belongsToMany(user::class, "completes", "lesson_id", "user_id");
    }
    public function uncomplete()
    {
        $this->completes()->detach(auth()->id());
    }
    public function complete()
    {
        $this->completes()->attach(auth()->id());
    }
    public function likes()
    {
        return $this->belongsToMany(user::class, "likes", "lesson_id", "user_id");
    }
    public function unlike()
    {
        $this->likes()->detach(auth()->id());
    }
    public function like()
    {
        $this->likes()->attach(auth()->id());
    }
    public function watchlist()
    {
        return $this->belongsToMany(user::class, "watch_list", "lesson_id", "user_id");
    }
    public function removeFromWatchlist()
    {
        $this->watchlist()->detach(auth()->id());
    }
    public function addToWatchlist()
    {
        $this->watchlist()->attach(auth()->id());
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->where("parent_id", null);
    }
}
