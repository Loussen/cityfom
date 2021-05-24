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
 * @property string $start_date_promote
 * @property string $end_date_promote
 * @property int $radius
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
    protected $fillable = ['cms_channel_detail_id', 'channel_id', 'title', 'description', 'additional', 'media', 'format', 'cms_image_url', 'price', 'old_price', 'publication_date', 'expiration_date', 'start_date_promote', 'end_date_promote', 'radius', 'reorder', 'status', 'created_at', 'updated_at'];

}
