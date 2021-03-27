<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class CmsUsers extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'firstname', 'lastname', 'photo', 'otp', 'language', 'last_login', 'expiration_date', 'store_ids', 'status', 'created_at', 'updated_at'];

}
