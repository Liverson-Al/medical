<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MSQCAngiographyAortaFactory extends Factory
{
    public function definition()
    {
        return [
            'VisitPatientID'=>1,
            'AV_annulus_fibrosis'=>rand(0, 10),
            'sinuses_valsalva'=>rand(0, 10),
            'sinotubular_junction'=>rand(0, 10),
            'asc_aorta_pulm_art_bif'=>rand(0, 10),
            'asc_aorta_before_BCS'=>rand(0, 10),
            'aortic_arch_before_CCA'=>rand(0, 10),
            'aortic_arch_before_LSA'=>rand(0, 10),
            'aorticlsthmus'=>rand(0, 10),
            'desc_aorta_middle_part'=>rand(0, 10),
            'abdominal_aorta'=>rand(0, 10),
            'user_id'=>1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
