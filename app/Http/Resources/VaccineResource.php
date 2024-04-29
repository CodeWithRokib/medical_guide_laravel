<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VaccineResource extends JsonResource
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
            'name'         => $this->name,
            'price'        => $this->price,
            'product_type' => $this->product_type,
            'description'  => $this->description,
            'gender'       => $this->gender,
            'from'         => $this->from,
            'to'           => $this->to,
            'status'       => $this->status,
            'image'        => asset('admin/product/upload/' . $this->image),
            'created_at'   => date('d-m-y h:i',strtotime($this->created_at)),
            'updated_at'   => date('d-m-y h:i',strtotime($this->updated_at)),
        ];
    }
}
