<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DieseasDuration extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'does_duration'=>'required',
            'does_number'=>'required',
            'product_id'=>'required',
        ];
    }

    public function messages(){
        return [
            'does_duration.required'=>'Please input Day / Month / Year number. Because Does Duration must needed.',
            'does_number.required'=>'Please input number 1 or 2 or other. Because Does number must needed.',
            'product_id.required'=>'Please select  product ',
        ];
    }
}
