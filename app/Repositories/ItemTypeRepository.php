<?php

namespace App\Repositories;

use App\Models\ItemType;
use InfyOm\Generator\Common\BaseRepository;

class ItemTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ItemType::class;
    }
}
