<?php

namespace App\Repositories;

use App\Models\EmploymentInformation;
use InfyOm\Generator\Common\BaseRepository;

class EmploymentInformationRepository extends BaseRepository
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
        return EmploymentInformation::class;
    }
}
