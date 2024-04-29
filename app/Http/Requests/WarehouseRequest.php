<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseRequest extends FormRequest
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
        return [
            'name'=>'required|unique:warehouses',
            'phone'=>'required|min:11',
            'address'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Warehouse name must be fill up',
            'name.unique'=>'Warehouse name already exists in database. please select different one',
            'phone.required'=>'Warehouse phone number must be need',
            'phone.min'=>'At least 11 digit for phone number',
            'address.required'=>'Warehouse address must be fill.'
        ];
    }
}
