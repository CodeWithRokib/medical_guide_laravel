<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:6|confirmed',
            'warehouse_id'=>'required',
            'role_id'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Name can\'t be empty ',
            'email.required'=>'Please input valid email for registration',
            'password.required'=>'Password needs for login/registration',
            'password.confirmed'=>'Password and Confirm password not match ',

        ];
    }
}
