<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource
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
            'division_id' => $this->division_id,
            'division'    => optional($this->devision)->name,
            'name'        => $this->name,
            'phone'       => $this->phone,
            'email'       => $this->email,
            'description' => $this->description,
            'address'     => $this->addree,
            'image'        => asset('admin/product/upload/' . $this->image),
            'created_at'  => date('d-m-y h:i',strtotime($this->created_at)),
            'updated_at'  => date('d-m-y h:i',strtotime($this->updated_at)),
            
        ];
    }
}
