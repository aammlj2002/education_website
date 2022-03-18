<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=["body", "user_id", "lesson_id", "parent_id"];
    public function commenter()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, "parent_id");
    }
    protected function getCreatedAtAttribute($value)
    {
        return str((new Carbon)->DiffForHumans($value))->replace("after", "ago");
    }
}
