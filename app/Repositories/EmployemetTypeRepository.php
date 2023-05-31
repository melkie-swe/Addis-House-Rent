<?php

namespace App\Repositories;

use App\Models\EmployemetType;
use InfyOm\Generator\Common\BaseRepository;

class EmployemetTypeRepository extends BaseRepository
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
        return EmployemetType::class;
    }
}
