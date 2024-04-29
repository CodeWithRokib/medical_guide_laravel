<?php

namespace App\Http\Requests;

use App\Enums\SlotStatus;
use App\Models\DoctorSlot;
use Illuminate\Foundation\Http\FormRequest;

class FindSlotRequest extends FormRequest
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
            'specialist_id' => ['required', 'numeric'],
            'doctor_id'     => ['nullable', 'numeric'],
            'date'          => ['required', 'date'],
        ];
    }


    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->findslot()) {
                $validator->errors()->add('date', 'Slot Not Found');
            }
        });
    }


    public function findslot()
    {
        $slot =  DoctorSlot::where(['doctor_id' => request('doctor_id'), 'date' => date('Y-m-d', strtotime(request('date'))), 'status' => SlotStatus::UNCONFIRM])->get();
        if (!blank($slot)) {
            return true;
        }

        return false;
    }
}
