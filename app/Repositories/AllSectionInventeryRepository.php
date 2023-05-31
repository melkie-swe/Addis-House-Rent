<?php

namespace App\Repositories;

use App\Models\AllSectionInventery;
use InfyOm\Generator\Common\BaseRepository;

class AllSectionInventeryRepository extends BaseRepository
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
        return AllSectionInventery::class;
    }
}
