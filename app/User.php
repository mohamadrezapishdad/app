<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',

        'about_me',
        'gender',
        'birthday',
        'country',
        'city',
        'avatar_path',
    ];

    protected $appends = ['avatar_url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarPathAttribute($value)
    {
        if ($value == null) {return null;}
        return Storage::url($value);
    }

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar_path ==null) {return null;}
        return url($this->avatar_path);
    }
}
