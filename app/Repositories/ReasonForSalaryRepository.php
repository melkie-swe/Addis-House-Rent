<?php

namespace App\Repositories;

use App\Models\ReasonForSalary;
use InfyOm\Generator\Common\BaseRepository;

class ReasonForSalaryRepository extends BaseRepository
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
        return ReasonForSalary::class;
    }
}
