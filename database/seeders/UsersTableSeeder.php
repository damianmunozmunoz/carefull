<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //paciente
            [
                'name' => 'Rafael Miralles Quesada',
                'email' => 'rafamiralles@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pacient'
            ],
            //médico
            [
                'name' => 'Damián Muñoz Muñoz',
                'email' => 'damianmunoz4002@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'nurse'
            ]
        ]);
    }
}
