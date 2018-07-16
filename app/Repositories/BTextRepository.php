<?php

namespace App\Repositories;

use App\Models\BText;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BTextRepository
 * @package App\Repositories
 * @version July 16, 2018, 5:31 am UTC
 *
 * @method BText findWithoutFail($id, $columns = ['*'])
 * @method BText find($id, $columns = ['*'])
 * @method BText first($columns = ['*'])
*/
class BTextRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text',
        'textable_id',
        'textable_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BText::class;
    }
}
