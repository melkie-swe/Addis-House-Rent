<?php

namespace App\Repositories;

use App\Models\OfficeLevel;
use InfyOm\Generator\Common\BaseRepository;

class OfficeLevelRepository extends BaseRepository
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
        return OfficeLevel::class;
    }
}
