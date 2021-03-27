<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int $inserted_by
 * @property int $type
 * @property string $created_at
 * @property string $updated_at
 */
class NotificationsStore extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'notifications_store';

    /**
     * @var array
     */
    protected $fillable = ['store_id', 'title', 'description', 'image', 'inserted_by', 'type', 'created_at', 'updated_at'];

}
