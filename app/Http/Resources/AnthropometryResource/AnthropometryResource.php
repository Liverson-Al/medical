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

            //'patient_id'=>$anthropometry->patient_id,
            'height'=>$anthropometry->height,
            'weight'=>$anthropometry->weight,
            'body_mass_index'=>$anthropometry->BMI,
            'body_surface_area'=>$anthropometry->BSA,
            'body_type'=>$anthropometry->DBM,
            'connective_tissue_dysplasia'=>$anthropometry->CTDS,
            'connective_tissue_dysplasia_Marfan'=>$anthropometry->Marfan,
            'connective_tissue_dysplasia_EhlersDanlos'=>$anthropometry->EhlersDanlos,
            'connective_tissue_dysplasia_LoeysDitz'=>$anthropometry->LoeysDitz,
            'connective_tissue_dysplasia_Terner'=>$anthropometry->Terner,
            'connective_tissue_dysplasia_Noonan'=>$anthropometry->Noonan,
            //'user_id'=>$anthropometry->user_id,
            //'version'=>$anthropometry->version,
            'version'=>0,
            //'date'=>$anthropometry->date,
            'date'=>0,

        ];
    }
}
