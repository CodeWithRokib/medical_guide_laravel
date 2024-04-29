<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AmbulenceRersource extends JsonResource
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
            'division_id'       => $this->division_id,
            'police_station_id' => $this->police_station_id,
            'area_id'           => $this->area_id,
            'division'          => optional($this->devision)->name,
            'policestations'    => optional($this->policestation)->name,
            'area'              => optional($this->area)->name,
            'phone'             => $this->phone,
            'name'              => $this->name,
            'created_at'        => date('d-m-y h:i',strtotime($this->created_at)),
            'updated_at'        => date('d-m-y h:i',strtotime($this->updated_at)),
        ];
    }
}
