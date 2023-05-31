<?php

namespace App\Http\Requests\Marital_Status;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Marital_Status\Marital_status;

class CreateMarital_statusRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Marital_status::$rules;
    }
}
