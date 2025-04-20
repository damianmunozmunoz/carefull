<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesVaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases_vaccines')->insert([
            ['disease_id' => '101', 'vaccine_id' => '1'],
            ['disease_id' => '102', 'vaccine_id' => '2'],
            ['disease_id' => '102', 'vaccine_id' => '3'],
            ['disease_id' => '102', 'vaccine_id' => '4'],
            ['disease_id' => '103', 'vaccine_id' => '3'],
            ['disease_id' => '103', 'vaccine_id' => '4'],
            ['disease_id' => '104', 'vaccine_id' => '3'],
            ['disease_id' => '104', 'vaccine_id' => '4'],
            ['disease_id' => '105', 'vaccine_id' => '3'],
            ['disease_id' => '105', 'vaccine_id' => '4'],
            ['disease_id' => '106', 'vaccine_id' => '3'],
            ['disease_id' => '106', 'vaccine_id' => '4'],
            ['disease_id' => '107', 'vaccine_id' => '4'],
            ['disease_id' => '107', 'vaccine_id' => '5'],
            ['disease_id' => '108', 'vaccine_id' => '6'],
            ['disease_id' => '109', 'vaccine_id' => '10'],
            ['disease_id' => '110', 'vaccine_id' => '10'],
            ['disease_id' => '111', 'vaccine_id' => '11'],
            ['disease_id' => '112', 'vaccine_id' => '12'],
            ['disease_id' => '113', 'vaccine_id' => '15'],
            ['disease_id' => '114', 'vaccine_id' => '16'],
            ['disease_id' => '115', 'vaccine_id' => '17'],
            ['disease_id' => '116', 'vaccine_id' => '18'],
            ['disease_id' => '117', 'vaccine_id' => '19']
        ]);
    }
}
