<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Block
 * @package App\Models
 * @version July 16, 2018, 5:25 am UTC
 *
 * @property string title
 * @property string link
 */
class Block extends Model
{
    use SoftDeletes;

    public $table = 'blocks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    public function texts()
    {
        return $this->morphMany('App\Models\BText', 'textable');
    }    
}
