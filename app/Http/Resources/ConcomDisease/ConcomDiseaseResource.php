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
            //'patient_id'=>$concomdisease->patient_id,
            //'cor_heart_disease_clinic'=>$concomdisease->cor_heart_disease_clinic,
            'acuteMyocardilInfarctionNum'=>$concomdisease->acute_myocardial_infarction_num,
            'currentMyocardilInfarction'=>$concomdisease->current_myocardial_infarction,
            'diabetes'=>$concomdisease->diabetes,
            'diabetesType'=>$concomdisease->diabetes_type,
            'cerebrovascularDisease'=>$concomdisease->cerebrovascular_disease,
            'BCAStenosis'=>$concomdisease->BCAStenosis,
            'translschAttack'=>$concomdisease->transient_ischemic_attack,
            'ACVA'=>$concomdisease->ACVA,
            'chronicLungDisease'=>$concomdisease->chronic_lung_disease,
            'prevInfectiousDisease'=>$concomdisease->prev_infectious_disease,
            'rhythmConcluctionDisturbances'=>$concomdisease->rhythm_conclusion_disturbances,
            'thyroidDisease'=>$concomdisease->thyroid_disease,
            'acuteRenalFailure'=>$concomdisease->acute_renal_failure,
            'chronicRenalFailure'=>$concomdisease->chronic_renal_failure,
            'oncology'=>$concomdisease->oncology,
            'hematologicalDisease'=>$concomdisease->hematological_disease,
            'pulmonaryEmbolism'=>$concomdisease->pulmonary_embolism,
            'chestWallInjury'=>$concomdisease->chest_wall_injury,
            'aorticValve'=>$concomdisease->aortic_valve,
            'acquiredAVDisease'=>$concomdisease->acquired_AV_disease,
            'AVDegenerativeLesions'=>$concomdisease->AV_degenerative_lesions,
            'AVInfectiousLesions'=>$concomdisease->AV_infectious_lesions,
            'AVWTraumaticLesionsb'=>$concomdisease->AVW_traumatic_lesions,
            //'user_id'=>$concomdisease->user_id,
            //'version'=>$concomdisease->version,
            'version'=>0,
            //'date'=>$concomdisease->date,
            'date'=>0,
        ];
    }
}
