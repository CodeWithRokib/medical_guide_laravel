<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name'=>'required|unique:companies,name,'.$request->id,
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Company name must be fill up',
            'name.unique'=>'Company name already exists in database. please select different one',
        ];
    }
}
