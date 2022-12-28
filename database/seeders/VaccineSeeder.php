<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        \App\Models\Vaccine::factory()->create([
            'name' => 'Covid - 1a Dose',
            'expected_date' => '2022-12-17',
            'application_date' => '2022-12-12',
        ]);

        \App\Models\Vaccine::factory()->create([
            'name' => 'Covid - 2a Dose',
            'expected_date' => '2022-12-17',
            'application_date' => '2022-12-12',
        ]);
        \App\Models\Vaccine::factory()->create([
            'name' => 'Covid - 3a Dose',
            'expected_date' => '2022-12-17',
            'application_date' => '2022-12-12',
        ]);
        \App\Models\Vaccine::factory()->create([
            'name' => 'Covid - 4a Dose',
            'expected_date' => '2022-12-17',
            'application_date' => '2022-12-12',
        ]);
        \App\Models\Vaccine::factory()->create([
            'name' => 'Antitetânica',
            'expected_date' => '2022-12-17',
            'application_date' => '2022-12-12',
        ]);
    }
}
