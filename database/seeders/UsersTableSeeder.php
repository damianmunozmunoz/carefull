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
                'name' => 'Paciente 0',
                'email' => 'pacient@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pacient'
            ],
            //médico
            [
                'name' => 'Médico 0',
                'email' => 'nurse@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'nurse'
            ]
        ]);
    }
}
