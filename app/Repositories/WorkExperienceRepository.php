<?php

namespace App\Repositories;

use App\Models\WorkExperience;
use InfyOm\Generator\Common\BaseRepository;

class WorkExperienceRepository extends BaseRepository
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
        return WorkExperience::class;
    }
}
