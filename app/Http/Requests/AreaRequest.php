<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AreaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name'=>'required|unique:areas,name,'.$request->id
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Area name must be fill up',
            'name.unique'=>'Area name already exists in database. please select different one',
        ];
    }
}
