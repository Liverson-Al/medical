<?php

namespace App\Http\Resources\Echocardiography;

use Illuminate\Http\Resources\Json\JsonResource;

class EchocardiographyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $echocardiography = $this->resource;
        return [

            'VisitPatientID'=>$echocardiography->VisitPatientID,
            'LVEF'=>$echocardiography->LVEF,
            'LVEDV'=>$echocardiography->LVEDV,
            'LVESV'=>$echocardiography->LVESV,
            'AscAorticD'=>$echocardiography->AscAorticD,
            'ValsalvaSinusesD'=>$echocardiography->ValsalvaSinusesD,
            'AVLeafletN'=>$echocardiography->AVLeafletN,
            'AVAnnuFibrD'=>$echocardiography->AVAnnuFibrD,
            'PeakSpeedAV'=>$echocardiography->PeakSpeedAV,
            'AVPressureGradientMax'=>$echocardiography->AVPressureGradientMax,
            'AVPressureGradientMean'=>$echocardiography->AVPressureGradientMean,
            'AorticRegurgitationDegree'=>$echocardiography->AorticRegurgitationDegree,
            'PulmArterySysBP'=>$echocardiography->PulmArterySysBP,
            'MitralInsuffStenPrD'=>$echocardiography->MitralInsuffStenPrD,
            'Tricuspi'=>$echocardiography->Tricuspi,
            'AtrialSeptalDefectPr'=>$echocardiography->AtrialSeptalDefectPr,
            'user_id'=>$echocardiography->user_id,
            'version'=>$echocardiography->version,
            'date'=>$echocardiography->date,

        ];
    }
}
