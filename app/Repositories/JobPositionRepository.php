<?php

namespace App\Repositories;

use App\Models\JobPosition;
use InfyOm\Generator\Common\BaseRepository;

class JobPositionRepository extends BaseRepository
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
        return JobPosition::class;
    }
}
