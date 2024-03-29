<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Clinic::factory(1)->create();
        \App\Models\Anthropometry::factory(10)->create();
        \App\Models\PatientHistory::factory(10)->create();
        \App\Models\ClinicalData::factory(10)->create();
        \App\Models\ConcomDisease::factory(10)->create();
        \App\Models\Echocardiography::factory(10)->create();
        \App\Models\MSQCAngiographyAorta::factory(10)->create();
        \App\Models\Occupation::factory(1)->create();
        \App\Models\Occupation::factory()->create([
            "Value" => "разработчик"
        ]);
        \App\Models\Occupation::factory()->create([
            "Value" => "медсестра"
        ]);
        for ($i = 0; $i <= 7; $i++){
            \App\Models\Role::factory()->create([
                "Value" => $i,
            ]);
        }


         \App\Models\User::factory(10)->create();
         \App\Models\PatientInfo::factory(10)->create();

         \App\Models\User::factory()->create([
             'Name' => 'Руслан',
             'Surname' => 'Даутов',
             'Patronymic' =>"Хурматович",
             'BirthDate' =>  "2002-8-01",
             'email' => 'dautov.r@spbu.heart.ru',
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             'Sex' => 1,
             'ClinicID' => 1,
             'RoleID' => 0,
             'OccupationID' => 2,
             'WorkExperience' => 1
         ]);


    }
}
