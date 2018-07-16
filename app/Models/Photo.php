<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Photo
 * @package App\Models
 * @version July 16, 2018, 11:17 am UTC
 *
 * @property string path
 * @property string alt
 */
class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'path',
        'alt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'path' => 'string',
        'alt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'required',
        'alt' => 'required'
    ];

    
}
