<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property string $created_at
 * @property string $updated_at
 */
class Favourites extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_id', 'created_at', 'updated_at'];

}
