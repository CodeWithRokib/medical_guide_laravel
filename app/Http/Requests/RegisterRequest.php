<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'     => ['required', 'string', 'max:200'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'string', 'max:255'],
            // 'image'         => $this->banner ? 'image|mimes:jpeg,png,jpg|max:3072' : 'required|image|mimes:jpeg,png,jpg|max:3072',
        ];
    }
}
