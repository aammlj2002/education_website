<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=["body", "user_id", "lesson_id"];
    public function commenter()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, "parent_id");
    }
}
