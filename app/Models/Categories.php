<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name_en
 * @property string $name_az
 * @property string $name_es
 * @property string $name_ru
 * @property string $icon
 * @property string $filter
 * @property int $cms_category_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Categories extends Model
{
    protected $table = 'categories';
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['name_en', 'name_az', 'name_es', 'name_ru', 'icon', 'filter', 'cms_category_id', 'status', 'created_at', 'updated_at'];

}
