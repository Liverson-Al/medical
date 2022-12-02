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
            'LVEF'=>rand(0, 20),
            'LVEDV'=>rand(0, 20),
            'LVESV'=>rand(0, 20),
            'ascAorticD'=>rand(0, 20),
            'valsalvaSinusesD'=>rand(0, 20),
            'AVLeafletN'=>rand(0, 20),
            'AVAnnuFibrD'=>rand(0, 20),
            'peakSpeedAV'=>rand(0, 20),
            'AVPressureGradientMax'=>rand(0, 20),
            'AVPressureGradientMean'=>rand(0, 20),
            'aorticRegurgitationDegree'=>rand(0, 20),
            'pulmArterySysBP'=>rand(0, 20),
            'mitralInsuffBool'=>rand(0, 1),
            'mitralInsuffDegree'=>"ИНФОРМАЦИЯ",
            'mitralStenBool'=>rand(0, 1),
            'mitralStenDegree'=>"ИНФОРМАЦИЯ",
            'tricuspiBool'=>rand(0, 1),
            'tricuspiDegree'=>"ИНФОРМАЦИЯ",
            'trialSeptalDefectPr'=>rand(0, 1),
            'user_id' => 1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
