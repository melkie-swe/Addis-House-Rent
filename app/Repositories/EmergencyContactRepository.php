<?php

namespace App\Repositories;

use App\Models\EmergencyContact;
use InfyOm\Generator\Common\BaseRepository;

class EmergencyContactRepository extends BaseRepository
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
        return EmergencyContact::class;
    }
}
