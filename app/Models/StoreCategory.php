<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $store_id
 * @property int $category_id
 * @property string $created_at
 * @property string $updated_at
 */
class StoreCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'store_category';

    /**
     * @var array
     */
    protected $fillable = ['store_id', 'category_id', 'created_at', 'updated_at'];

}
