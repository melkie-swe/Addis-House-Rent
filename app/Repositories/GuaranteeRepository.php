<?php

namespace App\Repositories;

use App\Models\Guarantee;
use InfyOm\Generator\Common\BaseRepository;

class GuaranteeRepository extends BaseRepository
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
        return Guarantee::class;
    }
}
