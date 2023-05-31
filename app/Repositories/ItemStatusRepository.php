<?php

namespace App\Repositories;

use App\Models\ItemStatus;
use InfyOm\Generator\Common\BaseRepository;

class ItemStatusRepository extends BaseRepository
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
        return ItemStatus::class;
    }
}
