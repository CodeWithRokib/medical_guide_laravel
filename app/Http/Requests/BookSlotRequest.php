<?php

namespace App\Http\Requests;

use App\Enums\SlotStatus;
use App\Models\DoctorSlot;
use Illuminate\Foundation\Http\FormRequest;

class BookSlotRequest extends FormRequest
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
            'doctor_slot_id' => ['required', 'numeric'],
            'type'           => ['required', 'numeric'],
            'gender'         => ['required', 'numeric'],
            'name'           => ['required', 'string'],
            'phone'          => ['required', 'string'],
            'age'            => ['required', 'string'],
            'weight'         => ['nullable', 'string'],
            'location'       => ['nullable', 'string'],
        ];
    }
}
