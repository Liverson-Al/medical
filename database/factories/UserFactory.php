<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'Name' => fake()->firstName(),
            'Surname' => fake()->lastname(),
            'Patronymic' => fake()->firstNameMale(),
            'BirthDate' => fake()->date(),
            'Sex' => fake()->boolean(),
            'ClinicID' => 1,
            'RoleID' => 1,
            'OccupationID' => 1,
            'WorkExperience' => rand(1, 100)
        ];
    }
}
