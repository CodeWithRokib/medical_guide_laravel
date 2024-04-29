<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AskDoctorResource extends JsonResource
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
            'question_user_id' => $this->question_user_id,
            'ans_name'         => optional($this->user)->name,
            'question'         => $this->question,
            'ans'              => $this->ans,
        ];
    }
}
