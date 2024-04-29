<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DietResource extends JsonResource
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
            'id'       => $this->id,
            'user_id'  => $this->user_id,
            'date'     => $this->date,
            'time'     => $this->time,
            'food_qty' => $this->food_qty,
            'food_type' => $this->food_type,
        ];
    }
}
