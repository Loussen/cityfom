<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $photo
 * @property string $otp
 * @property string $language
 * @property string $last_login
 * @property string $expiration_date
 * @property string $store_ids
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class CmsUsers extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'admin';

    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'firstname', 'lastname', 'photo', 'otp', 'language', 'last_login', 'expiration_date', 'store_ids', 'status', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
