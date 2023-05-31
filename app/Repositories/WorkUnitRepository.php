<?php

namespace App\Repositories;

use App\Models\WorkUnit;
use InfyOm\Generator\Common\BaseRepository;

class WorkUnitRepository extends BaseRepository
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
        return WorkUnit::class;
    }
}
