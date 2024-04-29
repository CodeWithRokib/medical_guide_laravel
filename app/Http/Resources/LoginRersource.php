<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginRersource extends JsonResource
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
            'status'  => 200,
            'message' => 'Successfully Login',

            'data'    => [
                'id'                => $this->id,
                'doctor_id'         => optional($this->doctor)->id,
                'name'              => $this->name,
                'email'             => $this->email,
                'service_type'      => $this->service_type,
                'division_id'       => $this->division_id,
                'police_station_id' => $this->police_station_id,
                'area_id'           => $this->area_id,
            ],

        ];
    }
}
