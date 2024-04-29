<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalDoctorResource extends JsonResource
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
            'name'        => $this->name,
            'type'        => $this->type,
            'email'       => $this->email,
            'phone'       => $this->phone,
            'description' => $this->description,
            'image'       => asset('admin/product/upload/' . $this->image),
            'created_at'  => date('d-m-y h:i',strtotime($this->created_at)),
            'updated_at'  => date('d-m-y h:i',strtotime($this->updated_at)),
            
        ];
    }
}
