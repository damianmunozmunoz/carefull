<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesAllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicines_allergies')->insert([
            ['medicine_id' => '118', 'allergy_id' => '2'],
            ['medicine_id' => '118', 'allergy_id' => '8'],
            ['medicine_id' => '119', 'allergy_id' => '2'],
            ['medicine_id' => '119', 'allergy_id' => '3'],
            ['medicine_id' => '119', 'allergy_id' => '6'],
            ['medicine_id' => '119', 'allergy_id' => '10'],
            ['medicine_id' => '120', 'allergy_id' => '3'],
            ['medicine_id' => '120', 'allergy_id' => '10'],
            ['medicine_id' => '120', 'allergy_id' => '13'],
            ['medicine_id' => '121', 'allergy_id' => '4'],
            ['medicine_id' => '121', 'allergy_id' => '5'],
            ['medicine_id' => '121', 'allergy_id' => '6'],
            ['medicine_id' => '121', 'allergy_id' => '7'],
            ['medicine_id' => '121', 'allergy_id' => '15'],
            ['medicine_id' => '122', 'allergy_id' => '4'],
            ['medicine_id' => '122', 'allergy_id' => '7'],
            ['medicine_id' => '123', 'allergy_id' => '9'],
            ['medicine_id' => '124', 'allergy_id' => '12'],
            ['medicine_id' => '125', 'allergy_id' => '14'],
            ['medicine_id' => '80', 'allergy_id' => '11'],
            ['medicine_id' => '25', 'allergy_id' => '8'],
            ['medicine_id' => '26', 'allergy_id' => '1'],
            ['medicine_id' => '27', 'allergy_id' => '3'],
            ['medicine_id' => '17', 'allergy_id' => '9'],
            ['medicine_id' => '17', 'allergy_id' => '12'],
            ['medicine_id' => '18', 'allergy_id' => '1'],
            ['medicine_id' => '18', 'allergy_id' => '10'],
            ['medicine_id' => '18', 'allergy_id' => '11'],
            ['medicine_id' => '18', 'allergy_id' => '14'],
            ['medicine_id' => '18', 'allergy_id' => '15'],
            ['medicine_id' => '19', 'allergy_id' => '1'],
            ['medicine_id' => '19', 'allergy_id' => '2'],
            ['medicine_id' => '19', 'allergy_id' => '3'],
            ['medicine_id' => '19', 'allergy_id' => '4'],
            ['medicine_id' => '19', 'allergy_id' => '5'],
            ['medicine_id' => '19', 'allergy_id' => '6'],
            ['medicine_id' => '19', 'allergy_id' => '8'],
            ['medicine_id' => '19', 'allergy_id' => '9'],
            ['medicine_id' => '19', 'allergy_id' => '10'],
            ['medicine_id' => '19', 'allergy_id' => '11'],
            ['medicine_id' => '19', 'allergy_id' => '12'],
            ['medicine_id' => '19', 'allergy_id' => '13'],
            ['medicine_id' => '19', 'allergy_id' => '14'],
            ['medicine_id' => '19', 'allergy_id' => '15'],
        ]);
    }
}
