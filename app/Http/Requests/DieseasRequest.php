<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DieseasRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|unique:dieseas'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Sir, Please input a valid name for Save as Dieseas Name',
            'name.unique'=>'Already taken this dieseas name . Please select new name for Save as Dieseas Name'
        ];
    }
}
