<?php

namespace App\Repositories;

use App\Models\LeaveType;
use InfyOm\Generator\Common\BaseRepository;

class LeaveTypeRepository extends BaseRepository
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
        return LeaveType::class;
    }
}
