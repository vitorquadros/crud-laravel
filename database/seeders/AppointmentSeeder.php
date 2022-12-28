<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de rotina',
            'date' => now(),
            'type' => 'Fisioterapia',
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de retorno',
            'date' => now(),
            'type' => 'Odontologia',
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de rotina',
            'date' => now(),
            'type' => 'Psicologia',
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de checkup',
            'date' => now(),
            'type' => 'Nutrição',
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de checkup',
            'date' => now(),
            'type' => 'Fonoaudiologia',
        ]);
    }
}
