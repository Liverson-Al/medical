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
            'disHeartBloodVesselsFirstLineRelatives'=>$patienthistory->dis_heart_blood_vessels_first_line_relatives,
            'relativesConnTissDysplasia'=>$patienthistory->relatives_conn_tiss_dysplasia,
            'heartSurgeriesPr'=>$patienthistory->heart_surgeries_pr,
            'heartSurgeriesType'=>$patienthistory->heart_surgeries_type,
            'geneticAnalysisPr'=>$patienthistory->genetic_analysis_pr,
            'geneticAnalysisRes'=>$patienthistory->genetic_analysis_res,
            'smokingExperience'=>$patienthistory->smoking_experience,
            'alkoConsumptionExperince'=>$patienthistory->alko_consumption_experince,
            'drugConsumptionExperince'=>$patienthistory->drug_consumption_experience,
            'occupationalHazards'=>$patienthistory->occupational_hazards,
            'sports'=>$patienthistory->sports,
            'diseaseKnowledge'=>$patienthistory->disease_knowledge,
            'employed'=>$patienthistory->works,
            'blodThinDrugs'=>$patienthistory->blood_thin_drugs,
            'disaggregants'=>$patienthistory->disaggregants,
            //'user_id'=>$patienthistory->user_id,
            //'version'=>$patienthistory->version,
            'version'=>0,
            //'date'=>$patienthistory->date,
            'date'=>0,
        ];
    }
}
