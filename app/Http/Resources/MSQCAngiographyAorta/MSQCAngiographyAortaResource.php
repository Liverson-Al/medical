<?php

namespace App\Http\Resources\MSQCAngiographyAorta;

use Illuminate\Http\Resources\Json\JsonResource;

class MSQCAngiographyAortaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $msqcangiographyaorta = $this->resource;
        return [

            //'VisitPatientID'=>$msqcangiographyaorta->VisitPatientID,
            'AV_annulus_fibrosis'=>$msqcangiographyaorta->AV_annulus_fibrosis,
            'sinuses_valsalva'=>$msqcangiographyaorta->sinuses_valsalva,
            'sinotubular_junction'=>$msqcangiographyaorta->sinotubular_junction,
            'asc_aorta_pulm_art_bif'=>$msqcangiographyaorta->asc_aorta_pulm_art_bif,
            'asc_aorta_before_BCS'=>$msqcangiographyaorta->asc_aorta_before_BCS,
            'aortic_arch_before_CCA'=>$msqcangiographyaorta->AorticArchBeforeCCA,
            'aortic_arch_before_LSA'=>$msqcangiographyaorta->aorticArchBeforeLSA,
            'aorticlsthmus'=>$msqcangiographyaorta->aorticlsthmus,
            'desc_aorta_middle_part'=>$msqcangiographyaorta->desc_aorta_middle_part,
            'abdominal_aorta'=>$msqcangiographyaorta->abdominal_aorta,
            //'user_id'=>$msqcangiographyaorta->user_id,
            //'version'=>$msqcangiographyaorta->version,
            'version'=>0,
            //'date'=>$msqcangiographyaorta->date,
            'date'=>0,

        ];
    }
}
