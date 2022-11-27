<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClinicalDataFactory extends Factory
{
    public function definition()
    {
        return [
            'visit_id'=>1,
            'main_diag'=>"ДИАГНОЗ",
            'aortic_dissection'=>rand(0, 1),
            'intramural_hematoma'=>rand(0, 1),
            'aortic_rupture'=>rand(0, 1),
            'patient_state'=>"ИНФОРМАЦИЯ",
            'pain_beh_stern'=>rand(0, 1),
            'interscap_reg_pain'=>"ИНФОРМАЦИЯ",
            'conscious_loss'=>"ИНФОРМАЦИЯ",
            'low_extrem_ischemia'=>"ИНФОРМАЦИЯ",
            'user_id'=>1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
