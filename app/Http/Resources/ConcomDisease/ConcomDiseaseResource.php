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
            'clinicIschHeartDis'=>$concomdisease->clinicIschHeartDis,
            'acuteMyocardilInfarctionBool'=>$concomdisease->acuteMyocardilInfarctionBool,
            'acuteMyocardilInfarctionNum'=>$concomdisease->acuteMyocardilInfarctionNum,
            'currentMyocardilInfarction'=>$concomdisease->currentMyocardilInfarction,
            'diabetes'=>$concomdisease->diabetes,
            'diabetesType'=>$concomdisease->diabetesType,
            'cerebrovascularDisease'=>$concomdisease->cerebrovascularDisease,
            'BCAStenosis'=>$concomdisease->BCAStenosis,
            'translschAttack'=>$concomdisease->translschAttack,
            'ACVA'=>$concomdisease->ACVA,
            'chronicLungDisease'=>$concomdisease->chronicLungDisease,
            'prevInfectiousDisease'=>$concomdisease->prevInfectiousDisease,
            'rhythmConcluctionDisturbances'=>$concomdisease->rhythmConcluctionDisturbances,
            'thyroidDisease'=>$concomdisease->thyroidDisease,
            'acuteRenalFailure'=>$concomdisease->acuteRenalFailure,
            'chronicRenalFailure'=>$concomdisease->chronicRenalFailure,
            'oncology'=>$concomdisease->oncology,
            'hematologicalDisease'=>$concomdisease->hematologicalDisease,
            'pulmonaryEmbolism'=>$concomdisease->pulmonaryEmbolism,
            'chestWallInjury'=>$concomdisease->chestWallInjury,
            'aorticValve'=>$concomdisease->aorticValve,
            'acquiredAVDisease'=>$concomdisease->acquiredAVDisease,
            'AVDegenerativeLesions'=>$concomdisease->AVDegenerativeLesions,
            'AVInfectiousLesions'=>$concomdisease->AVInfectiousLesions,
            'AVWTraumaticLesionsb'=>$concomdisease->AVWTraumaticLesionsb,
            //'user_id'=>$concomdisease->user_id,
            //'version'=>$concomdisease->version,
            'version'=>0,
            //'date'=>$concomdisease->date,
            'date'=>0,
        ];
    }
}
