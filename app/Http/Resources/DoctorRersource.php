<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorRersource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id'           => $this->id,
            'name'         => optional($this->user)->name,
            'phone'        => optional($this->user)->phone,
            'hospital'     => optional($this->hospital)->name,
            'specialist'   => optional($this->specialist)->name,
            'gender'       => $this->gender == 0 ? 'Male' : 'Female',
            'type'         => $this->type == 1 ? 'Local' : 'Foreign',
            'type_numeric' => $this->type,
            'image'        => null,
        ];
    }
}
