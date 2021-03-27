<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name_en
 * @property string $name_az
 * @property string $name_es
 * @property string $name_ru
 * @property int $reorder
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class ReportType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_type';

    /**
     * @var array
     */
    protected $fillable = ['name_en', 'name_az', 'name_es', 'name_ru', 'reorder', 'status', 'created_at', 'updated_at'];

}
