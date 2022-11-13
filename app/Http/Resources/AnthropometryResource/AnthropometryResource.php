<?php

namespace App\Http\Resources\AnthropometryResource;

use Illuminate\Http\Resources\Json\JsonResource;

class AnthropometryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $anthropometry = $this->resource;
        return [

            'patient_id'=>$anthropometry->patient_id,
            'height'=>$anthropometry->height,
            'weight'=>$anthropometry->weight,
            'BMI'=>$anthropometry->BMI,
            'BSA'=>$anthropometry->BSA,
            'DBM'=>$anthropometry->DBM,
            'CTDS'=>$anthropometry->CTDS,
            'Marfan'=>$anthropometry->Marfan,
            'EhlersDanlos'=>$anthropometry->EhlersDanlos,
            'LoeysDitz'=>$anthropometry->LoeysDitz,
            'Terner'=>$anthropometry->Terner,
            'Noonan'=>$anthropometry->Noonan,
            'user_id'=>$anthropometry->user_id,
            'version'=>$anthropometry->version,
            'date'=>$anthropometry->date,

        ];
    }
}
