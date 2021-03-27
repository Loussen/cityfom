<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property int $type_id
 * @property string $reason
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class ReportStore extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_store';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'store_id', 'type_id', 'reason', 'status', 'created_at', 'updated_at'];

}
