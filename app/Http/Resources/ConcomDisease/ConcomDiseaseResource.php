<?php

namespace App\Http\Resources\ConcomDisease;

use Illuminate\Http\Resources\Json\JsonResource;

class ConcomDiseaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $concomdisease = $this->resource;
        return [
            'patient_id'=>$concomdisease->patient_id,
            'cor_heart_disease_clinic'=>$concomdisease->cor_heart_disease_clinic,
            'acute_myocardial_infarction_num'=>$concomdisease->acute_myocardial_infarction_num,
            'current_myocardial_infarction'=>$concomdisease->current_myocardial_infarction,
            'diabetes'=>$concomdisease->diabetes,
            'diabetes_type'=>$concomdisease->diabetes_type,
            'cerebrovascular_disease'=>$concomdisease->cerebrovascular_disease,
            'BCAStenosis'=>$concomdisease->BCAStenosis,
            'transient_ischemic_attack'=>$concomdisease->transient_ischemic_attack,
            'ACVA'=>$concomdisease->ACVA,
            'chronic_lung_disease'=>$concomdisease->chronic_lung_disease,
            'prev_infectious_disease'=>$concomdisease->prev_infectious_disease,
            'rhythm_conclusion_disturbances'=>$concomdisease->rhythm_conclusion_disturbances,
            'thyroid_disease'=>$concomdisease->thyroid_disease,
            'acute_renal_failure'=>$concomdisease->acute_renal_failure,
            'chronic_renal_failure'=>$concomdisease->chronic_renal_failure,
            'oncology'=>$concomdisease->oncology,
            'hematological_disease'=>$concomdisease->hematological_disease,
            'pulmonary_embolism'=>$concomdisease->pulmonary_embolism,
            'chest_wall_injury'=>$concomdisease->chest_wall_injury,
            'aortic_valve'=>$concomdisease->aortic_valve,
            'acquired_AV_disease'=>$concomdisease->acquired_AV_disease,
            'AV_degenerative_lesions'=>$concomdisease->AV_degenerative_lesions,
            'AV_infectious_lesions'=>$concomdisease->AV_infectious_lesions,
            'AVW_traumatic_lesions'=>$concomdisease->AVW_traumatic_lesions,
            'user_id'=>$concomdisease->user_id,
            'version'=>$concomdisease->version,
            'date'=>$concomdisease->date,
        ];
    }
}
