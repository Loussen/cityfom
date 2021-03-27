<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $address_components
 * @property string $adr_address
 * @property string $formatted_address
 * @property string $formatted_phone_number
 * @property string $geometry
 * @property string $icon
 * @property string $u_id
 * @property string $international_phone_number
 * @property string $name
 * @property string $opening_hours
 * @property string $photos
 * @property string $place_id
 * @property string $plus_code
 * @property string $price_level
 * @property string $rating
 * @property string $reference
 * @property string $reviews
 * @property string $scope
 * @property string $types
 * @property string $url
 * @property string $user_ratings_total
 * @property string $utc_offset
 * @property string $vicinity
 * @property string $website
 * @property string $html_attributions
 * @property string $status
 * @property string $photo_ref
 * @property string $photo_first
 * @property string $created_at
 */
class GoogleStores extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['address_components', 'adr_address', 'formatted_address', 'formatted_phone_number', 'geometry', 'icon', 'u_id', 'international_phone_number', 'name', 'opening_hours', 'photos', 'place_id', 'plus_code', 'price_level', 'rating', 'reference', 'reviews', 'scope', 'types', 'url', 'user_ratings_total', 'utc_offset', 'vicinity', 'website', 'html_attributions', 'status', 'photo_ref', 'photo_first', 'created_at'];

}
