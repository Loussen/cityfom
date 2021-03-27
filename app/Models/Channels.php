<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property int $channel_category_id
 * @property string $title
 * @property string $description
 * @property int $reorder
 * @property string $image
 * @property int $cms_channel_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Channels extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['store_id', 'channel_category_id', 'title', 'description', 'reorder', 'image', 'cms_channel_id', 'status', 'created_at', 'updated_at'];

}
