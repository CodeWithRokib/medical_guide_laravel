<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HealthProfileResource extends JsonResource
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
            'id'             => $this->id,
            'user_id'        => $this->user_id,
            'age'            => $this->age,
            'gender'         => $this->gender,
            'height'         => $this->height,
            'weight'         => $this->weight,
            'marital'        => $this->marital,
            'chief_complain' => $this->chief_complain,
            'prev_disease'   => $this->prev_disease,
            'ot_history'     => $this->ot_history,
            'medication'     => $this->medication,
            'disabilities'   => $this->disabilities,
            'test_result'    => $this->test_result,

        ];
    }
}
