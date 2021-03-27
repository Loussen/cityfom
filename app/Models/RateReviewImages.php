<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rate_review_id
 * @property string $image
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class RateReviewImages extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['rate_review_id', 'image', 'status', 'created_at', 'updated_at'];

}
