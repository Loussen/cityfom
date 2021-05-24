<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int $discount
 * @property string $code
 * @property string $valid_from
 * @property string $valid_to
 * @property string $start_date_promote
 * @property string $end_date_promote
 * @property int $redeem
 * @property int $radius
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Coupons extends Model
{
    protected $table = 'coupons';
    public $timestamps = true;
    /**
     * @var array
     */
    protected $fillable = ['store_id', 'title', 'description', 'image', 'discount', 'code', 'valid_from', 'valid_to', 'start_date_promote', 'end_date_promote', 'radius', 'redeem', 'status', 'created_at', 'updated_at'];

}
