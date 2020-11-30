<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education(): hasMany
    {
        return $this->hasMany(Education::class);
    }

    public function experiences(): hasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function skills(): hasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function data(): hasOne
    {
        return $this->hasOne(UserData::class);
    }
}
