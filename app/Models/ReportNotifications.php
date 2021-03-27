<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $notification_id
 * @property string $reason
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class ReportNotifications extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'notification_id', 'reason', 'status', 'created_at', 'updated_at'];

}
