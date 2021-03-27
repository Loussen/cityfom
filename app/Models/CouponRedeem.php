<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $coupon_id
 * @property string $created_at
 * @property string $updated_at
 */
class CouponRedeem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'coupon_redeem';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'coupon_id', 'created_at', 'updated_at'];

}
