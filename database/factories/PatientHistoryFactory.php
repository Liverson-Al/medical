<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PatientHistoryFactory extends Factory
{
    public function definition()
    {
        return [
            'patient_id'=>1,
            'disHeartBloodVesselsFirstLineRelatives'=>"ИНФОРМАЦИЯ",
            'relativesConnTissDysplasia'=>rand(0, 1),
            'heartSurgeriesPr'=>rand(0, 1),
            'heartSurgeriesType'=>"ИНФОРМАЦИЯ",
            'geneticAnalysisPr'=>rand(0, 1),
            'geneticAnalysisRes'=>"ИНФОРМАЦИЯ",
            'smokingBool'=>rand(0, 1),
            'smokingExperience'=>rand(0, 10),
            'alkoConsumptionBool'=>rand(0, 1),
            'alkoConsumptionExperince'=>rand(0, 10),
            'drugConsumptionBool'=>rand(0, 1),
            'drugConsumptionExperince'=>rand(0, 10),
            'occupationalHazards'=>"ИНФОРМАЦИЯ",
            'sports'=>"ИНФОРМАЦИЯ",
            'diseaseKnowledge'=>"2022-11-11",
            'employed'=>rand(0, 1),
            'blodThinDrugs'=>rand(0, 1),
            'disaggregants'=>rand(0, 1),
            'user_id'=>1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
