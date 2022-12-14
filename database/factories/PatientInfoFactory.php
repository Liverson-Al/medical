<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PatientInfoFactory extends Factory
{
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'second_name' => fake()->lastname(),
            'patronymic' => fake()->firstNameMale(),
            'birthday' => fake()->date(),
            'sex' => fake()->boolean(),
            'race' => 'evr',
            'ClinicID' => 1,
        ];
    }
}
