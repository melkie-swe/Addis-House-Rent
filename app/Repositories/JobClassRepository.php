<?php

namespace App\Repositories;

use App\Models\JobClass;
use InfyOm\Generator\Common\BaseRepository;

class JobClassRepository extends BaseRepository
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
        return JobClass::class;
    }
}
