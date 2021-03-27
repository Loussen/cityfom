<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $value
 * @property string $slug
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 */
class Configs extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'value', 'slug', 'type', 'created_at', 'updated_at'];

}
