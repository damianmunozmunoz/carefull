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
                'name' => 'Antonio Gutierrez Gonzalez',
                'email' => 'antoniogutierrez@gmail.com',
                'password' => Hash::make('carefulltfg'),
                'role' => 'pacient'
            ],
            //médico
            [
                'name' => 'Damián Muñoz Muñoz',
                'email' => 'damianmunoz4002@gmail.com',
                'password' => Hash::make('carefulltfg'),
                'role' => 'nurse'
            ]
        ]);
    }
}
