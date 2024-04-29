<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PolicestationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name'=>'required|unique:police_stations,name,'.$request->id
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Police Stations name must be fill up',
            'name.unique'=>'Police Stations name already exists in database. please select different one',
        ];
    }
}
