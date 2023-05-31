<?php

namespace App\Repositories;

use App\Models\Woreda;
use InfyOm\Generator\Common\BaseRepository;

class WoredaRepository extends BaseRepository
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
        return Woreda::class;
    }
}
