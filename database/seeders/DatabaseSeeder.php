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
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => '1',
             'email' => '123123123@mail.ru',
             'password' => '$2y$10$xKg/S8IFputjcKM9WhoZ/uw.H127hNCv2vjBNbV3TIOwjmEzht7Lq'
         ]);
    }
}
