<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property int $rating
 * @property string $review
 * @property string $comment
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class RateReviews extends Model
{
    protected $table = 'rate_reviews';
    public $timestamps = true;
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_id', 'rating', 'review', 'comment', 'status', 'created_at', 'updated_at'];

}
