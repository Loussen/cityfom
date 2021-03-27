<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cms_notification_id
 * @property int $user_id
 * @property int $store_id
 * @property string $title
 * @property string $message
 * @property string $image
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class PushNotifications extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cms_notification_id', 'user_id', 'store_id', 'title', 'message', 'image', 'status', 'created_at', 'updated_at'];

}
