<?php

namespace App\Repositories;

use App\Models\Religion;
use InfyOm\Generator\Common\BaseRepository;

class ReligionRepository extends BaseRepository
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
        return Religion::class;
    }
}
