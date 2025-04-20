<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('additional_user_infos')->insert([
            [
                'borndate' => '2004-07-29',
                'gender' => 'Hombre',
                'address' => 'Ubicación ficticia',
                'phone_number' => '987654321',
                'user_id' => 1,
            ],
            [
                'borndate' => '2007-11-28',
                'gender' => 'Mujer',
                'address' => 'Ubicación ficticia',
                'phone_number' => '123456789',
                'user_id' => 2,
            ]
        ]);
    }
}
