<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property int $previous
 * @property int $current
 * @property string $created_at
 * @property string $updated_at
 */
class LoyaltyPoints extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_id', 'previous', 'current', 'created_at', 'updated_at'];

}
