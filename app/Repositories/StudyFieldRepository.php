<?php

namespace App\Repositories;

use App\Models\StudyField;
use InfyOm\Generator\Common\BaseRepository;

class StudyFieldRepository extends BaseRepository
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
        return StudyField::class;
    }
}
