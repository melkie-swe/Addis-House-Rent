<?php

namespace App\Http\Requests;

use App\Classes\Reply;
use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Sentinel;

class FrontCoreRequest extends FormRequest
{
    protected $user;
    //protected $companyId;

    /**
     * CoreRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->user = Sentinel::getUser()->all();

        //$this->companyId = $this->user->company_id;

    }

    protected function failedValidation(Validator $validator)
    {
        $response = Reply::failedToastr($validator);
        throw new HttpResponseException(response()->json($response, 200));
    }

}
