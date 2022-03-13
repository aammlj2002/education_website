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
}
