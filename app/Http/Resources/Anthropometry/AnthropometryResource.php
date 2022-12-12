<?php

namespace App\Http\Resources\Anthropometry;

use App\Models\Anthropometry;
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
        $patient = $this->resource;
        $anthropometry = Anthropometry::find($patient->id);
        return [

            //'patient_id'=>$anthropometry->patient_id,
            'height'=>$anthropometry->height,
            'weight'=>$anthropometry->weight,
            'body_mass_index'=>$anthropometry->body_mass_index,
            'body_surface_area'=>$anthropometry->body_surface_area,
            'body_type'=>$anthropometry->body_type,
            'connective_tissue_dysplasia'=>$anthropometry->connective_tissue_dysplasia,
            'connective_tissue_dysplasia_Marfan'=>$anthropometry->connective_tissue_dysplasia_Marfan,
            'connective_tissue_dysplasia_EhlersDanlos'=>$anthropometry->connective_tissue_dysplasia_EhlersDanlos,
            'connective_tissue_dysplasia_LoeysDitz'=>$anthropometry->connective_tissue_dysplasia_LoeysDitz,
            'connective_tissue_dysplasia_Terner'=>$anthropometry->connective_tissue_dysplasia_Terner,
            'connective_tissue_dysplasia_Noonan'=>$anthropometry->connective_tissue_dysplasia_Noonan,
            //'user_id'=>$anthropometry->user_id,
            //'version'=>$anthropometry->version,
            'version'=>0,
            //'date'=>$anthropometry->date,
            'date'=>0,

        ];
    }
}
