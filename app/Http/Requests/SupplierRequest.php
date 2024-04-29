<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'unique:suppliers',
            'phone'=>'unique:suppliers',
            'address'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Sir, Please input a valid name for Save as Supplier Name',
            'name.unique'=>'Already taken this Vaccine Company . Please select new name for Save as Vaccine Company Name',
            'phone.required'=>'Supplier phone needed. Please input a valid number for save as Supplier Phone',
            'phone.unique'=>'Phone already taken. Please input a valid number for save as Supplier Phone',
            'email.unique'=>'Already taken  . Please select new email for Save as Supplier email',
            'address.required'=>'Supplier address must needed',
        ];
    }
}
