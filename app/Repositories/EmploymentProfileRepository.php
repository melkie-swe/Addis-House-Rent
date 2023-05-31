<?php

namespace App\Repositories;

use App\Models\EmploymentProfile;
use InfyOm\Generator\Common\BaseRepository;

class EmploymentProfileRepository extends BaseRepository
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
        return EmploymentProfile::class;
    }
}
