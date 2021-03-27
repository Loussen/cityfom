<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class GeneralNotifications extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_id', 'title', 'description', 'image', 'status', 'created_at', 'updated_at'];

}
