<?php

namespace App\Repositories;

use App\Models\Leave;
use InfyOm\Generator\Common\BaseRepository;

class LeaveRepository extends BaseRepository
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
        return Leave::class;
    }
}
