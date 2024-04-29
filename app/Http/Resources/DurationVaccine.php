<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DurationVaccine extends JsonResource
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
            'dieseas'=>$this->dieseas->name,
            'vaccine'=>$this->product->name,
            "dose"=>[
                "style"=>$this->type,
                "does_number"=>$this->does_number,
                "does_duration"=>$this->does_duration,
            ],
        ];
    }
}
