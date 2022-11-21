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

            //'VisitPatientID'=>$echocardiography->VisitPatientID,
            'LVEF'=>$echocardiography->LVEF,
            'LVEDV'=>$echocardiography->LVEDV,
            'LVESV'=>$echocardiography->LVESV,
            'ascAorticD'=>$echocardiography->AscAorticD,
            'valsalvaSinusesD'=>$echocardiography->ValsalvaSinusesD,
            'AVLeafletN'=>$echocardiography->AVLeafletN,
            'AVAnnuFibrD'=>$echocardiography->AVAnnuFibrD,
            'peakSpeedAV'=>$echocardiography->PeakSpeedAV,
            'AVPressureGradientMax'=>$echocardiography->AVPressureGradientMax,
            'AVPressureGradientMean'=>$echocardiography->AVPressureGradientMean,
            'aorticRegurgitationDegree'=>$echocardiography->AorticRegurgitationDegree,
            'pulmArterySysBP'=>$echocardiography->PulmArterySysBP,
            'mitralInsuffStenPrD'=>$echocardiography->MitralInsuffStenPrD,
            'tricuspi'=>$echocardiography->Tricuspi,
            'trialSeptalDefectPr'=>$echocardiography->AtrialSeptalDefectPr,
            //'user_id'=>$echocardiography->user_id,
            //'version'=>$echocardiography->version,
            'version'=>0,
            //'date'=>$echocardiography->date,
            'date'=>0,

        ];
    }
}
