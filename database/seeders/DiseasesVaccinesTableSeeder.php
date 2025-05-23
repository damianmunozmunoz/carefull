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
            ['vaccine_id' => '1', 'disease_id' => '101'],
            ['vaccine_id' => '2', 'disease_id' => '102'],
            ['vaccine_id' => '3', 'disease_id' => '102'],
            ['vaccine_id' => '3', 'disease_id' => '103'],
            ['vaccine_id' => '3', 'disease_id' => '104'],
            ['vaccine_id' => '3', 'disease_id' => '105'],
            ['vaccine_id' => '3', 'disease_id' => '106'],
            ['vaccine_id' => '4', 'disease_id' => '102'],
            ['vaccine_id' => '4', 'disease_id' => '103'],
            ['vaccine_id' => '4', 'disease_id' => '104'],
            ['vaccine_id' => '4', 'disease_id' => '105'],
            ['vaccine_id' => '4', 'disease_id' => '106'],
            ['vaccine_id' => '4', 'disease_id' => '107'],
            ['vaccine_id' => '5', 'disease_id' => '107'],
            ['vaccine_id' => '6', 'disease_id' => '4'],
            ['vaccine_id' => '6', 'disease_id' => '27'],
            ['vaccine_id' => '6', 'disease_id' => '108'],
            ['vaccine_id' => '7', 'disease_id' => '7'],
            ['vaccine_id' => '8', 'disease_id' => '30'],
            ['vaccine_id' => '8', 'disease_id' => '31'],
            ['vaccine_id' => '8', 'disease_id' => '32'],
            ['vaccine_id' => '9', 'disease_id' => '29'],
            ['vaccine_id' => '10', 'disease_id' => '109'],
            ['vaccine_id' => '10', 'disease_id' => '110'],
            ['vaccine_id' => '11', 'disease_id' => '111'],
            ['vaccine_id' => '12', 'disease_id' => '112'],
            ['vaccine_id' => '13', 'disease_id' => '37'],
            ['vaccine_id' => '14', 'disease_id' => '39'],
            ['vaccine_id' => '15', 'disease_id' => '113'],
            ['vaccine_id' => '16', 'disease_id' => '114'],
            ['vaccine_id' => '17', 'disease_id' => '115'],
            ['vaccine_id' => '18', 'disease_id' => '116'],
            ['vaccine_id' => '19', 'disease_id' => '117'],
            ['vaccine_id' => '20', 'disease_id' => '34'],
        ]);
    }
}
