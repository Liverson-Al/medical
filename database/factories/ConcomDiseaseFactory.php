<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ConcomDiseaseFactory extends Factory
{
    public function definition()
    {
        return [
            'patient_id' =>1,
            'cor_heart_disease_clinic'=>"ИНФОРМАЦИЯ",
            'acuteMyocardilInfarctionNum'=>2,
            'currentMyocardilInfarction'=>rand(0, 1),
            'diabetes'=>rand(0, 1),
            'diabetesType'=>"ИНФОРМАЦИЯ",
            'cerebrovascularDisease'=>rand(0, 1),
            'BCAStenosis'=>rand(0, 1),
            'translschAttack'=>rand(0, 1),
            'ACVA'=>rand(0, 1),
            'chronicLungDisease'=>rand(0, 1),
            'prevInfectiousDisease'=>rand(0, 1),
            'rhythmConcluctionDisturbances'=>rand(0, 1),
            'thyroidDisease'=>rand(0, 1),
            'acuteRenalFailure'=>rand(0, 1),
            'chronicRenalFailure'=>rand(0, 1),
            'oncology'=>rand(0, 1),
            'hematologicalDisease'=>rand(0, 1),
            'pulmonaryEmbolism'=>rand(0, 1),
            'chestWallInjury'=>rand(0, 1),
            'aorticValve'=>"ИНФОРМАЦИЯ",
            'acquiredAVDisease'=>rand(0, 1),
            'AVDegenerativeLesions'=>rand(0, 1),
            'AVInfectiousLesions'=>rand(0, 1),
            'AVWTraumaticLesionsb'=>rand(0, 1),
            'user_id'=>1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
