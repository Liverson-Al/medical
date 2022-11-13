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
            'id'=>$patienthistory->id,
            'dis_heart_blood_vessels_first_line_relatives'=>$patienthistory->dis_heart_blood_vessels_first_line_relatives,
            'relatives_conn_tiss_dysplasia'=>$patienthistory->relatives_conn_tiss_dysplasia,
            'heart_surgeries_pr'=>$patienthistory->heart_surgeries_pr,
            'heart_surgeries_type'=>$patienthistory->heart_surgeries_type,
            'genetic_analysis_pr'=>$patienthistory->genetic_analysis_pr,
            'genetic_analysis_res'=>$patienthistory->genetic_analysis_res,
            'smoking_experience'=>$patienthistory->smoking_experience,
            'alko_consumption_experince'=>$patienthistory->alko_consumption_experince,
            'drug_consumption_experience'=>$patienthistory->drug_consumption_experience,
            'occupational_hazards'=>$patienthistory->occupational_hazards,
            'sports'=>$patienthistory->sports,
            'disease_knowledge'=>$patienthistory->disease_knowledge,
            'works'=>$patienthistory->works,
            'blood_thin_drugs'=>$patienthistory->blood_thin_drugs,
            'disaggregants'=>$patienthistory->disaggregants,
            'user_id'=>$patienthistory->user_id,
            'version'=>$patienthistory->version,
            'date'=>$patienthistory->date,
        ];
    }
}
