<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $review_id
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class ReviewLikes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['review_id', 'user_id', 'created_at', 'updated_at'];

}
