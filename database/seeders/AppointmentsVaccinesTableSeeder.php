<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsVaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments_vaccines')->insert([
            ['appointment_id' => '1', 'vaccine_id' => '3'],
            ['appointment_id' => '1' , 'vaccine_id' => '7']
        ]);
    }
}
