<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GlueCoseResource extends JsonResource
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
            'time_period'      => $this->time_period,
            'time_period_name' => trans('time_perioud.'.$this->time_period),
            'test_result'      => $this->test_result,
        ];
    }
}
