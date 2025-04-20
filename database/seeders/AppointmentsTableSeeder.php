<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            [
                'date' => '2025-04-15',
                'time' => '12:15',
                'reason' => 'Cita de prueba',
                'observations' => 'Esta es una cita de prueba',
                'episode_id' => 1
            ]
        ]);
    }
}
