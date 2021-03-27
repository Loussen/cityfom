<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property string $description
 * @property int $points
 * @property string $expiration
 * @property string $type
 * @property string $image
 * @property int $reorder
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class LoyaltyMessages extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['store_id', 'description', 'points', 'expiration', 'type', 'image', 'reorder', 'status', 'created_at', 'updated_at'];

}
