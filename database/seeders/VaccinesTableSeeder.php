<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccines')->insert([
            [
                'name' => 'BCG',
                'description' => 'Vacuna bacteriana utilizada principalmente en recién nacidos y lactantes para prevenir formas graves de tuberculosis como la meningitis tuberculosa y la tuberculosis miliar. Se elabora a partir de una cepa atenuada de Mycobacterium bovis.'
            ],
            [
                'name' => 'Vacuna de la hepatitis B',
                'description' => 'Vacuna de subunidades proteicas que protege contra la infección por el virus de la hepatitis B, transmitido por sangre, fluidos corporales o de madre a hijo. Forma parte de la vacunación infantil y también se recomienda en adultos de riesgo.'
            ],
            [
                'name' => 'Pentavalente',
                'description' => 'Vacuna combinada que protege contra cinco enfermedades: difteria, tétanos, tos ferina, hepatitis B y enfermedades por Haemophilus influenzae tipo B. Facilita la inmunización infantil al reducir el número de pinchazos.'
            ],
            [
                'name' => 'Hexavalente',
                'description' => 'Similar a la pentavalente, esta vacuna incluye también protección contra la poliomielitis. Se administra durante los primeros meses de vida y es parte esencial del calendario infantil.'
            ],
            [
                'name' => 'Vacuna de la poliomielitis',
                'description' => 'Existen dos tipos: la vacuna inactivada (IPV) y la oral (OPV). La IPV se usa en la mayoría de los países desarrollados y es más segura. Ha sido fundamental en la casi erradicación de la poliomielitis a nivel mundial.'
            ],
            [
                'name' => 'Neumocócica conjugada',
                'description' => 'Protege contra 13 serotipos del neumococo, bacteria que puede causar enfermedades graves como neumonía, meningitis y otitis. Se administra en varias dosis desde la infancia.'
            ],
            [
                'name' => 'Vacuna del Rotavirus',
                'description' => 'Vacuna oral que previene infecciones por rotavirus, una causa frecuente de diarrea grave y deshidratación en bebés y niños pequeños. Es muy eficaz para reducir hospitalizaciones por gastroenteritis.'
            ],
            [
                'name' => 'Triple vírica',
                'description' => 'Vacuna combinada que inmuniza contra tres enfermedades víricas. Es fundamental en los programas de vacunación infantil y en la prevención de brotes epidémicos.'
            ],
            [
                'name' => 'Vacuna de la varicela',
                'description' => 'Vacuna de virus atenuado que previene la varicela, una infección muy contagiosa que puede causar complicaciones en adultos o personas inmunodeprimidas.'
            ],
            [
                'name' => 'Vacuna del virus del papiloma humano',
                'description' => 'Vacuna que protege contra varios tipos de VPH, responsables del cáncer de cuello uterino, cáncer anal, orofaríngeo y verrugas genitales. Se recomienda en adolescentes de ambos sexos.'
            ],
            [
                'name' => 'Vacuna de la hepatitis A',
                'description' => 'Vacuna inactivada que protege contra el virus de la hepatitis A, transmitido por vía fecal-oral. Muy útil en viajeros a zonas endémicas y en brotes comunitarios.'
            ],
            [
                'name' => 'Meningocócica ACWY',
                'description' => 'Vacuna que protege contra cuatro serogrupos del Neisseria meningitidis, bacteria causante de meningitis y sepsis. Recomendable en adolescentes, personal militar y viajeros a ciertas regiones.'
            ],
            [
                'name' => 'Vacuna de la gripe',
                'description' => 'Vacuna anual que cambia cada temporada según las cepas circulantes. Recomendable en personas mayores, embarazadas, niños y personas con enfermedades crónicas.'
            ],
            [
                'name' => 'Vacuna del COVID-19',
                'description' => 'Vacunas desarrolladas contra el SARS-CoV-2. Incluyen tecnologías de ARN mensajero y vectores virales. Reducen significativamente la gravedad de la enfermedad y la mortalidad.'
            ],
            [
                'name' => 'Vacuna de la fiebre amarilla',
                'description' => 'Vacuna de virus atenuado recomendada para viajeros a zonas tropicales de África y Sudamérica. Obligatorias para ingresar a ciertos países.'
            ],
            [
                'name' => 'Vacuna de la fiebre tifoidea',
                'description' => 'Hay versiones orales y parenterales. Protege contra la Salmonella typhi, causante de fiebre, dolor abdominal y diarrea. Recomendable para viajeros.'
            ],
            [
                'name' => 'Vacuna de la rabia',
                'description' => 'Vacuna preventiva para personas en riesgo (veterinarios, trabajadores rurales) y como postexposición tras mordeduras. Muy efectiva si se administra a tiempo.'
            ],
            [
                'name' => 'Vacuna de la cólera',
                'description' => 'Vacuna oral para prevenir infecciones por Vibrio cholerae. Útil en regiones con brotes activos o sin acceso a agua potable segura.'
            ],
            [
                'name' => 'Vacuna de la encefalitis japonesa',
                'description' => 'Vacuna contra un virus transmitido por mosquitos, endémico en zonas rurales de Asia. Recomendada para viajeros a largo plazo o estancias prolongadas.'
            ],
            [
                'name' => 'Vacuna del herpes zóster',
                'description' => 'Vacuna recomendada para adultos mayores para prevenir el herpes zóster (culebrilla), una reactivación del virus varicela-zóster que puede ser muy dolorosa.'
            ],
            [
                'name' => 'Ninguna vacuna',
                'description' => 'No llevan ninguna vacuna.',
            ]
        ]);
    }
}
