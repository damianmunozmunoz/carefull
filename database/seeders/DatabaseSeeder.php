<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            InfosTableSeeder::class,
            EpisodesTableSeeder::class,
            AppointmentsTableSeeder::class,
            AllergiesTableSeeder::class,
            VaccinesTableSeeder::class,
            DiseasesTableSeeder::class,
            MedicinesTableSeeder::class,
            MedicinesDiseasesTableSeeder::class,
            MedicinesAllergiesTableSeeder::class,
            DiseasesVaccinesTableSeeder::class,
            AppointmentsVaccinesTableSeeder::class,
            AppointmentsMedicinesTableSeeder::class,
            AppointmentsAllergiesTableSeeder::class,
            AppointmentsDiseasesTableSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'dam',
            'email' => 'dam@gmail.com',
        ]);
    }
}
