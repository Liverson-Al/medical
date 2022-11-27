<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EchocardiographyFactory extends Factory
{
    public function definition()
    {
        return [
            'visit_id'=>1,
            'LVEF'=>"ИНФОРМАЦИЯ",
            'LVEDV'=>"ИНФОРМАЦИЯ",
            'LVESV'=>"ИНФОРМАЦИЯ",
            'ascAorticD'=>"ИНФОРМАЦИЯ",
            'valsalvaSinusesD'=>"ИНФОРМАЦИЯ",
            'AVLeafletN'=>"ИНФОРМАЦИЯ",
            'AVAnnuFibrD'=>"ИНФОРМАЦИЯ",
            'peakSpeedAV'=>"ИНФОРМАЦИЯ",
            'AVPressureGradientMax'=>"ИНФОРМАЦИЯ",
            'AVPressureGradientMean'=>"ИНФОРМАЦИЯ",
            'aorticRegurgitationDegree'=>rand(0, 1),
            'pulmArterySysBP'=>"ИНФОРМАЦИЯ",
            'mitralInsuffStenPrD'=>"ИНФОРМАЦИЯ",
            'tricuspi'=>"ИНФОРМАЦИЯ",
            'trialSeptalDefectPr'=>"ИНФОРМАЦИЯ",
            'user_id' => 1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
