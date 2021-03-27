<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $categroy_id
 * @property string $created_at
 * @property string $updated_at
 */
class UserCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_category';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'categroy_id', 'created_at', 'updated_at'];

}
