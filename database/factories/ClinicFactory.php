<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClinicFactory extends Factory
{
    public function definition()
    {
        return [
            'Name' => 'СПБГУ',
            'Region' => "Северо-западный регион",
            'City' => "Санкт-Петербург",
        ];
    }
}
