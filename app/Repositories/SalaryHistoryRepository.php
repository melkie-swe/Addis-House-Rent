<?php

namespace App\Repositories;

use App\Models\SalaryHistory;
use InfyOm\Generator\Common\BaseRepository;

class SalaryHistoryRepository extends BaseRepository
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
        return SalaryHistory::class;
    }
}
