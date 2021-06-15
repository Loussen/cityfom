<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * @property int $id
 * @property int $cms_user_id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $photo
 * @property string $birthday
 * @property string $location
 * @property string $otp
 * @property string $verified
 * @property string $device_id
 * @property string $device_type
 * @property string $gender
 * @property string $facebook_id
 * @property string $twitter_id
 * @property string $apple_id
 * @property string $google_id
 * @property string $fav_notify
 * @property int $distance
 * @property string $radius_notify
 * @property string $language
 * @property string $last_login
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class AppUsers extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * @var array
     */
    protected $fillable = ['cms_user_id', 'username', 'email', 'password', 'firstname', 'lastname', 'phone', 'photo', 'birthday', 'location', 'otp', 'verified', 'device_id', 'device_type', 'gender', 'facebook_id', 'twitter_id', 'apple_id', 'google_id', 'fav_notify', 'radius_notify', 'distance', 'language', 'last_login', 'status', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
