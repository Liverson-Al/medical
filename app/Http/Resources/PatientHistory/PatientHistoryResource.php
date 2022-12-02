<?php

namespace App\Http\Resources\PatientHistory;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $patienthistory = $this->resource;
        return [
            //'id'=>$patienthistory->id,
            'disHeartBloodVesselsFirstLineRelatives'=>$patienthistory->disHeartBloodVesselsFirstLineRelatives,
            'relativesConnTissDysplasia'=>$patienthistory->relativesConnTissDysplasia,
            'heartSurgeriesPr'=>$patienthistory->heartSurgeriesPr,
            'heartSurgeriesType'=>$patienthistory->heartSurgeriesType,
            'geneticAnalysisPr'=>$patienthistory->geneticAnalysisPr,
            'geneticAnalysisRes'=>$patienthistory->geneticAnalysisRes,
            'smokingBool'=>$patienthistory->smokingBool,
            'smokingExperience'=>$patienthistory->smokingExperience,
            'alkoConsumptionBool'=>$patienthistory->alkoConsumptionBool,
            'alkoConsumptionExperince'=>$patienthistory->alkoConsumptionExperince,
            'drugConsumptionBool'=>$patienthistory->drugConsumptionBool,
            'drugConsumptionExperince'=>$patienthistory->drugConsumptionExperince,
            'occupationalHazards'=>$patienthistory->occupationalHazards,
            'sports'=>$patienthistory->sports,
            'diseaseKnowledge'=>$patienthistory->diseaseKnowledge,
            'employed'=>$patienthistory->employed,
            'blodThinDrugs'=>$patienthistory->blodThinDrugs,
            'disaggregants'=>$patienthistory->disaggregants,
            //'user_id'=>$patienthistory->user_id,
            //'version'=>$patienthistory->version,
            'version'=>0,
            //'date'=>$patienthistory->date,
            'date'=>0,
        ];
    }
}
