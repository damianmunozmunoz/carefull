<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('episodes')->insert([
            [
                'name' => 'Episodio de prueba',
                'pacient_id' => 1,
                'nurse_id' => 2,
            ]
        ]);
    }
}
