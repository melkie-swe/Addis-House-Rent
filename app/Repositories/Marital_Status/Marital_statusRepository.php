<?php

namespace App\Repositories\Marital_Status;

use App\Models\Marital_Status\Marital_status;
use InfyOm\Generator\Common\BaseRepository;

class Marital_statusRepository extends BaseRepository
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
        return Marital_status::class;
    }
}
