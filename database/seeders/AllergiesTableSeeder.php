<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allergies')->insert([
            [
                'name' => 'Alergia al polen',
                'description' => 'Reacción inmunológica al polen de árboles, pastos o malezas. Causa estornudos, congestión, picazón nasal y ojos llorosos.',
            ],
            [
                'name' => 'Alergia a los ácaros del polvo',
                'description' => 'Reacción a los excrementos microscópicos de los ácaros. Provoca síntomas similares a la rinitis alérgica.',
            ],
            [
                'name' => 'Alergia a los animales',
                'description' => 'Hipersensibilidad a proteínas presentes en la saliva, piel o caspa de animales.',
            ],
            [
                'name' => 'Alergia a los alimentos',
                'description' => 'Reacción grave a proteínas alimentarias. Puede causar desde urticaria hasta anafilaxia.',
            ],
            [
                'name' => 'Alergia al látex',
                'description' => 'Reacción a proteínas del látex natural, común en productos médicos. Puede producir anafilaxia.',
            ],
            [
                'name' => 'Alergia a las picaduras de insectos',
                'description' => 'Reacción exagerada a veneno de insectos como abejas y avispas. Riesgo de anafilaxia.',
            ],
            [
                'name' => 'Alergia a los medicamentos',
                'description' => 'Reacción a fármacos como antibióticos (penicilina) o AINEs. Puede causar erupciones o reacciones sistémicas.',
            ],
            [
                'name' => 'Alergia al moho',
                'description' => 'Hipersensibilidad a esporas de moho en ambientes húmedos. Produce síntomas respiratorios.',
            ],
            [
                'name' => 'Alergia a los metales',
                'description' => 'Dermatitis de contacto por exposición a ciertos metales presentes en joyas, relojes y ropa.',
            ],
            [
                'name' => 'Alergia al frío',
                'description' => 'Reacción al frío extremo que produce urticaria, enrojecimiento y picazón en zonas expuestas.',
            ],
            
            [
                'name' => 'Alergia al sol',
                'description' => 'Fotosensibilidad que provoca erupciones tras exposición solar, común en piel clara.',
            ],
            
            [
                'name' => 'Alergia al cloro',
                'description' => 'Irritación o reacción cutánea tras exposición al cloro en piscinas u otros productos químicos.',
            ],
            
            [
                'name' => 'Alergia al semen',
                'description' => 'Reacción rara a proteínas del semen, con síntomas locales o sistémicos tras el contacto.',
            ],
            
            [
                'name' => 'Alergia al alcohol',
                'description' => 'Reacción a histaminas o sulfitos presentes en algunas bebidas alcohólicas.',
            ],
            
            [
                'name' => 'Alergia al ejercicio físico',
                'description' => 'Condición en la que el ejercicio desencadena síntomas alérgicos, especialmente tras comidas.',
            ],
            
            [
                'name' => 'Ninguna alergia',
                'description' => 'No padecen ninguna alergia.',
            ],
        ]);
    }
}
