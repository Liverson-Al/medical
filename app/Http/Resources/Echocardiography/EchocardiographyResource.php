<?php

namespace App\Http\Resources\Echocardiography;

use App\Models\Echocardiography;
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
        $patient = $this->resource;
        $echocardiography = Echocardiography::find($patient->id);
        return [

            //'VisitPatientID'=>$echocardiography->VisitPatientID,
            'LVEF'=>$echocardiography->LVEF,
            'LVEDV'=>$echocardiography->LVEDV,
            'LVESV'=>$echocardiography->LVESV,
            'ascAorticD'=>$echocardiography->ascAorticD,
            'valsalvaSinusesD'=>$echocardiography->valsalvaSinusesD,
            'AVLeafletN'=>$echocardiography->AVLeafletN,
            'AVAnnuFibrD'=>$echocardiography->AVAnnuFibrD,
            'peakSpeedAV'=>$echocardiography->peakSpeedAV,
            'AVPressureGradientMax'=>$echocardiography->AVPressureGradientMax,
            'AVPressureGradientMean'=>$echocardiography->AVPressureGradientMean,
            'aorticRegurgitationDegree'=>$echocardiography->aorticRegurgitationDegree,
            'pulmArterySysBP'=>$echocardiography->pulmArterySysBP,
            'mitralInsuffBool'=>$echocardiography->mitralInsuffBool,
            'mitralInsuffDegree'=>$echocardiography->mitralInsuffDegree,
            'mitralStenBool'=>$echocardiography->mitralStenBool,
            'mitralStenDegree'=>$echocardiography->mitralStenDegree,
            'tricuspiBool'=>$echocardiography->tricuspiBool,
            'tricuspiDegree'=>$echocardiography->tricuspiDegree,
            'trialSeptalDefectPr'=>$echocardiography->trialSeptalDefectPr,
            //'user_id'=>$echocardiography->user_id,
            //'version'=>$echocardiography->version,
            'version'=>0,
            //'date'=>$echocardiography->date,
            'date'=>0,

        ];
    }
}
