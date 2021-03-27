<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $category
 * @property int $distance
 * @property string $open
 * @property string $tags
 * @property string $created_at
 * @property string $updated_at
 */
class UserSearch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_search';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'category', 'distance', 'open', 'tags', 'created_at', 'updated_at'];

}
