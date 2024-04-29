<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BodyTempretureResource extends JsonResource
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
            'id'               => $this->id,
            'user_id'          => $this->user_id,
            'date'             => $this->date,
            'body_temperature' => $this->body_temperature,
            'time' => $this->time,
        ];
    }
}
