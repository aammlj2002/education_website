<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        "username",
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function completedLessons()
    {
        return $this->belongsToMany(Lesson::class, "completes", "user_id", "lesson_id");
    }
    public function isCompleted($lesson)
    {
        return auth()->user()->completedLessons && auth()->user()->completedLessons->contains("id", $lesson->id);
    }
    public function likedLessons()
    {
        return $this->belongsToMany(Lesson::class, "likes", "user_id", "lesson_id");
    }
    public function isLiked($lesson)
    {
        return auth()->user()->likedLessons && auth()->user()->likedLessons->contains("id", $lesson->id);
    }
    public function watchlist()
    {
        return $this->belongsToMany(Lesson::class, "watch_list", "user_id", "lesson_id");
    }
    public function isWatchlisted($lesson)
    {
        return auth()->user()->watchlist && auth()->user()->watchlist->contains("id", $lesson->id);
    }
}
