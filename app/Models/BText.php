<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BText
 * @package App\Models
 * @version July 16, 2018, 5:31 am UTC
 *
 * @property string text
 * @property integer textable_id
 * @property string textable_type
 */
class BText extends Model
{
    use SoftDeletes;

    public $table = 'b_texts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text',
        'textable_id',
        'textable_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'textable_id' => 'integer',
        'textable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'textable_id' => 'required',
        'textable_type' => 'required'
    ];

    public function textable()
    {
        return $this->morphTo();
    }
    
}
