<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorSlotRersource extends JsonResource
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

            'id'        => $this->id,
            'date'      => date('d M Y',strtotime($this->date)),
            'slot_from' => date('h:i A',strtotime($this->slot_from)),
            'slot_to'   => date('h:i A',strtotime($this->slot_to)),
            'status'    => $this->status,
        ];
    }
}
