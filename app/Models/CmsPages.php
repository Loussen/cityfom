<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content_en
 * @property string $content_az
 * @property string $content_es
 * @property string $content_ru
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class CmsPages extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'content_en', 'content_az', 'content_es', 'content_ru', 'status', 'created_at', 'updated_at'];

}
