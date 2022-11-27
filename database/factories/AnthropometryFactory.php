<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AnthropometryFactory extends Factory
{
    public function definition()
    {
        return [
            'patient_id'=>1,
            'height'=>rand(140, 200),
            'weight'=>rand(60, 100),
            'body_mass_index'=>rand(1, 5),
            'body_surface_area'=>60,
            'body_type'=>rand(1, 5),
            'connective_tissue_dysplasia'=>rand(0, 1),
            'connective_tissue_dysplasia_Marfan'=>rand(0, 1),
            'connective_tissue_dysplasia_EhlersDanlos'=>rand(0, 1),
            'connective_tissue_dysplasia_LoeysDitz'=>rand(0, 1),
            'connective_tissue_dysplasia_Terner'=>rand(0, 1),
            'connective_tissue_dysplasia_Noonan'=>rand(0, 1),
            'user_id'=>1,
            'version'=>0,
            'date'=>"2022-11-11",
        ];
    }
}
