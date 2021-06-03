<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'app_users';

    /**
     * @var array
     */
    protected $fillable = ['cms_user_id', 'username', 'email', 'password', 'firstname', 'lastname', 'phone', 'photo', 'birthday', 'location', 'otp', 'verified', 'device_id', 'device_type', 'gender', 'facebook_id', 'twitter_id', 'apple_id', 'google_id', 'fav_notify', 'radius_notify', 'language', 'last_login', 'status', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
