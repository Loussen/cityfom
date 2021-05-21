<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $subject_en
 * @property string $subject_az
 * @property string $subject_es
 * @property string $subject_ru
 * @property string $content_en
 * @property string $content_az
 * @property string $content_es
 * @property string $content_ru
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class EmailTemplates extends Model
{
    use Sluggable;
    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'subject_en', 'subject_az', 'subject_es', 'subject_ru', 'content_en', 'content_az', 'content_es', 'content_ru', 'status', 'created_at', 'updated_at'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
