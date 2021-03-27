<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $notification_id
 * @property int $user_id
 * @property string $read_time
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class NotificationsStoreUsers extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['notification_id', 'user_id', 'read_time', 'status', 'created_at', 'updated_at'];

}
