<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        \App\Models\Doctor::factory()->create([
            'name' => 'Dr. House',
            'crm' => strval(random_int(100000, 999999)),
            'email' => 'default@dev.com',
        ]);

        \App\Models\Doctor::factory()->create([
            'name' => 'Dr. Wilson',
            'crm' => strval(random_int(100000, 999999)),
            'email' => 'default@dev.com',
        ]);

        \App\Models\Doctor::factory()->create([
            'name' => 'Dr. Linux',
            'crm' => strval(random_int(100000, 999999)),
            'email' => 'default@dev.com',
        ]);

        \App\Models\Doctor::factory()->create([
            'name' => 'Dr. Drauzio Varella',
            'crm' => strval(random_int(100000, 999999)),
            'email' => 'default@dev.com',
        ]);

        \App\Models\Doctor::factory()->create([
            'name' => 'Dr. Laravel',
            'crm' => strval(random_int(100000, 999999)),
            'email' => 'default@dev.com',
        ]);

 
    }
}
