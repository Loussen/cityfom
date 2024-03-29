<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $subject_en
 * @property string $subject_az
 * @property string $subject_es
 * @property string $subject_ru
 * @property string $content_en
 * @property string $content_az
 * @property string $content_es
 * @property string $content_ru
 * @property string $image
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class GeneralMessage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'general_message';

    /**
     * @var array
     */
    protected $fillable = ['subject_en', 'subject_az', 'subject_es', 'subject_ru', 'content_en', 'content_az', 'content_es', 'content_ru', 'image', 'status', 'created_at', 'updated_at'];

}
