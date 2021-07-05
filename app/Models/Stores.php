<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cms_store_id
 * @property int $cms_notification_id
 * @property string $name
 * @property string $description
 * @property string $tags
 * @property string $address
 * @property string $country
 * @property string $latitude
 * @property string $longitude
 * @property string $email
 * @property string $phone
 * @property string $hours
 * @property string $special_days
 * @property string $website
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $verified
 * @property string $type
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Stores extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id','cms_store_id', 'cms_notification_id', 'name', 'description', 'tags', 'address', 'country', 'latitude', 'longitude', 'email', 'phone', 'hours', 'special_days', 'website', 'facebook', 'twitter', 'instagram', 'verified', 'type', 'status', 'created_at', 'updated_at'];

}
