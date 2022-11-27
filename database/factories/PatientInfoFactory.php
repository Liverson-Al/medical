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
            'Name' => fake()->firstName(),
            'Surname' => fake()->lastname(),
            'Patronymic' => fake()->firstNameMale(),
            'BirthDate' => fake()->date(),
            'Sex' => fake()->boolean(),
            'race' => 'evr',
            'ClinicID' => 1,
        ];
    }
}
