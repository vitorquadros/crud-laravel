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
            'doctor_id' => 1,
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de retorno',
            'date' => now(),
            'type' => 'Odontologia',
            'doctor_id' => 2,
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de rotina',
            'date' => now(),
            'type' => 'Psicologia',
            'doctor_id' => 3,
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de checkup',
            'date' => now(),
            'type' => 'Nutrição',
            'doctor_id' => 4,
        ]);

        \App\Models\Appointment::factory()->create([
            'description' => 'Consulta de checkup',
            'date' => now(),
            'type' => 'Fonoaudiologia',
            'doctor_id' => 5,
        ]);
    }
}
