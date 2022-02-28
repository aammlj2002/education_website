<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function Courses()
    {
        return $this->hasMany(Course::class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
