<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|unique:hospitals'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Sir, Please input a valid name for Save as Vaccine Company Name',
            'name.unique'=>'Already taken this Vaccine Company . Please select new name for Save as Vaccine Company Name'
        ];
    }
}
