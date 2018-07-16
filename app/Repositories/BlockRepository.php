<?php

namespace App\Repositories;

use App\Models\Block;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlockRepository
 * @package App\Repositories
 * @version July 16, 2018, 5:25 am UTC
 *
 * @method Block findWithoutFail($id, $columns = ['*'])
 * @method Block find($id, $columns = ['*'])
 * @method Block first($columns = ['*'])
*/
class BlockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Block::class;
    }
}
