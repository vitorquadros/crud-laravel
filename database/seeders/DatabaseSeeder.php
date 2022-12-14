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
            'name' => 'Usuário de Teste',
            'email' => 'test@dev.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@dev.com',
            'is_admin' => true
        ]);

        $seedDoctor = new DoctorSeeder();
        $seedDoctor->run();

        $seedVaccine = new VaccineSeeder();
        $seedVaccine->run();

        $seedAppointment = new AppointmentSeeder();
        $seedAppointment->run();
    }
}
