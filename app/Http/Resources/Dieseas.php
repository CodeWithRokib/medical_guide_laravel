<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DurationVaccine;
use App\DurationVaccine as Du_Vaccine;

class Dieseas extends JsonResource
{
    public function toArray($request)
    {
       $data = Du_Vaccine::where('dieseas_id',$this->id)->get();

        return [
            'dieseas'=>$this->name,
            'vaccine'=>[
                "vaccine"=> $this->products,
                "type"=> $this->dieseasdurations,
                "dose"=> Du_Vaccine::where('dieseas_id',$this->id)->get(),
            ],

        ];
    }
}
