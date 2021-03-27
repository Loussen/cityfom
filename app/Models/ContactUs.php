<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 */
class ContactUs extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact_us';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'subject', 'message', 'created_at', 'updated_at'];

}
