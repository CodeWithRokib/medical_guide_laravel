<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'dieseas_id'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,gif,svg,png',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Sir, Please input a valid name for Save as Vaccine Name',
            'price.required'=>'Sir, Please input a amount for Save as Vaccine Price',
            'description.unique'=>'Sir,Please input details for save as vaccine details/description',
            'image.required'=>'Sir,Please select image for save as vaccine image',
        ];
    }
}
