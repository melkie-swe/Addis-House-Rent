<?php

namespace App\Repositories;

use App\Models\Ethnic;
use InfyOm\Generator\Common\BaseRepository;

class EthnicRepository extends BaseRepository
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
        return Ethnic::class;
    }
}
