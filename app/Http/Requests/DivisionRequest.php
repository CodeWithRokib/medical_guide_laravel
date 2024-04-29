<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class DivisionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name'=>'required|unique:divisions,name,'.$request->id
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Division name must be fill up',
            'name.unique'=>'Division name already exists in database. please select different one',
        ];
    }
}
