<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cms_channel_detail_id
 * @property int $channel_id
 * @property string $title
 * @property string $description
 * @property string $additional
 * @property string $image
 * @property string $format
 * @property string $cms_image_url
 * @property string $price
 * @property string $old_price
 * @property string $publication_date
 * @property string $expiration_date
 * @property int $reorder
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class ChannelsDetails extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cms_channel_detail_id', 'channel_id', 'title', 'description', 'additional', 'image', 'format', 'cms_image_url', 'price', 'old_price', 'publication_date', 'expiration_date', 'reorder', 'status', 'created_at', 'updated_at'];

}
