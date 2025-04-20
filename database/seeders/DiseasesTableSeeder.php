<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases')->insert([
            [
                'name' => 'Gripe',
                'description' => 'Infección viral contagiosa causada por los virus de la influenza. Provoca fiebre alta, dolor muscular, fatiga, tos seca y congestión nasal. Su duración promedio es de una semana, aunque puede haber complicaciones en personas mayores o con enfermedades crónicas.'
            ],
            [
                'name' => 'Fiebre',
                'description' => 'Elevación de la temperatura corporal como respuesta del sistema inmunológico ante infecciones, inflamaciones o enfermedades. Puede acompañarse de escalofríos, sudoración y malestar general.'
            ],
            [
                'name' => 'Resfriado común',
                'description' => 'Infección viral leve de las vías respiratorias superiores, especialmente por rinovirus. Se manifiesta con estornudos, congestión nasal, dolor de garganta y malestar general, pero no suele causar fiebre alta.'
            ],
            [
                'name' => 'Otitis',
                'description' => 'Inflamación del oído medio, común en niños. Generalmente causada por infecciones bacterianas o virales, genera dolor de oído, fiebre, irritabilidad y, en algunos casos, pérdida temporal de audición.'
            ],
            [
                'name' => 'Faringitis',
                'description' => 'Inflamación de la faringe, que puede ser viral o bacteriana (como por estreptococo). Provoca dolor de garganta, fiebre y dificultad para tragar.'
            ],
            [
                'name' => 'Laringitis',
                'description' => 'Inflamación de la laringe (cuerdas vocales) provocada por infecciones, uso excesivo de la voz o irritantes. Produce ronquera, pérdida de la voz, tos seca y dolor de garganta.'
            ],
            [
                'name' => 'Gastroenteritis',
                'description' => 'Infección del estómago e intestinos por virus (como rotavirus), bacterias o parásitos. Genera diarrea, vómitos, náuseas, fiebre y dolor abdominal.'
            ],
            [
                'name' => 'Conjuntivitis',
                'description' => 'Inflamación de la conjuntiva del ojo, provocada por virus, bacterias o alergias. Los síntomas incluyen enrojecimiento, secreción ocular, picor y lagrimeo.'
            ],
            [
                'name' => 'Cistitis',
                'description' => 'Infección urinaria que afecta la vejiga. Frecuente en mujeres, se manifiesta con necesidad urgente y frecuente de orinar, ardor al orinar y dolor pélvico.'
            ],
            [
                'name' => 'Caries dental',
                'description' => 'Deterioro del esmalte dental causado por bacterias que producen ácidos al digerir azúcares. Si no se trata, puede llegar a la pulpa y provocar dolor o infecciones graves.'
            ],
            [
                'name' => 'Gingivitis',
                'description' => 'Inflamación de las encías causada principalmente por acumulación de placa bacteriana. Provoca sangrado al cepillarse, enrojecimiento y dolor de encías.'
            ],
            [
                'name' => 'Dermatitis',
                'description' => 'Inflamación de la piel por contacto con alérgenos o irritantes. Causa enrojecimiento, picazón, ampollas o descamación. Existen múltiples tipos (atópica, de contacto, etc.).'
            ],
            [
                'name' => 'Eczema',
                'description' => 'Trastorno crónico de la piel que causa picazón intensa, enrojecimiento, inflamación y sequedad. Es común en personas con antecedentes alérgicos.'
            ],
            [
                'name' => 'Urticaria',
                'description' => 'Erupción cutánea con ronchas rojizas elevadas y picor intenso, causada por reacciones alérgicas, infecciones o estrés.'
            ],
            [
                'name' => 'Migraña',
                'description' => 'Trastorno neurológico con episodios recurrentes de dolor de cabeza intenso, generalmente pulsátil y en un solo lado. Puede ir acompañado de náuseas, vómitos y sensibilidad a la luz/sonido.'
            ],
            [
                'name' => 'Acné',
                'description' => 'Afección cutánea común en adolescentes causada por obstrucción e inflamación de los folículos pilosos por exceso de sebo. Aparecen granos, espinillas y, en casos graves, nódulos o quistes.'
            ],
            [
                'name' => 'Asma',
                'description' => 'Enfermedad inflamatoria crónica de las vías respiratorias, que causa dificultad para respirar, sibilancias y opresión torácica. Se desencadena por alérgenos, ejercicio o infecciones.'
            ],
            [
                'name' => 'Diabetes tipo 1',
                'description' => 'Enfermedad autoinmune en la que el cuerpo destruye las células que producen insulina. Se presenta normalmente en niños o jóvenes y requiere insulina diaria para sobrevivir. Sin tratamiento adecuado, puede causar complicaciones graves como cetoacidosis.'
            ],
            [
                'name' => 'Diabetes tipo 2',
                'description' => 'Enfermedad metabólica caracterizada por resistencia a la insulina o su baja producción, provocando hiperglucemia. Está asociada con sobrepeso y estilo de vida sedentario.'
            ],
            [
                'name' => 'Hipertensión',
                'description' => 'Condición crónica en la que la presión arterial se mantiene elevada, lo que aumenta el riesgo de infartos, accidentes cerebrovasculares y enfermedades renales.'
            ],
            [
                'name' => 'Hipotiroidismo',
                'description' => 'Trastorno endocrino en el que la glándula tiroides produce menos hormonas tiroideas de las necesarias. Provoca cansancio, aumento de peso, piel seca, sensibilidad al frío y lentitud mental.'
            ],
            [
                'name' => 'Hipertiroidismo',
                'description' => 'Condición en la que la tiroides produce un exceso de hormonas. Causa pérdida de peso, taquicardia, nerviosismo, sudoración y ojos saltones (exoftalmos en enfermedad de Graves).'
            ],
            [
                'name' => 'Colesterol alto',
                'description' => 'Elevación de los niveles de colesterol en sangre, en especial del LDL (“colesterol malo”), lo que aumenta el riesgo de enfermedades cardiovasculares como infartos o ACV.'
            ],
            [
                'name' => 'Anemia ferropénica',
                'description' => 'Deficiencia de hierro en el cuerpo que impide una correcta producción de hemoglobina. Provoca debilidad, palidez, fatiga y dificultad para concentrarse.'
            ],
            [
                'name' => 'Infección urinaria',
                'description' => 'Infección de cualquier parte del tracto urinario, siendo la más común la cistitis. Se manifiesta por ardor al orinar, orina turbia y necesidad constante de miccionar.'
            ],
            [
                'name' => 'Bronquitis',
                'description' => 'Inflamación de los bronquios debido a infecciones o irritantes. Produce tos persistente con mucosidad, dificultad para respirar y dolor en el pecho.'
            ],
            [
                'name' => 'Neumonía',
                'description' => 'Infección pulmonar que inflama los alvéolos, los cuales pueden llenarse de líquido o pus. Causa fiebre alta, escalofríos, tos con flema, fatiga y dolor torácico.'
            ],
            [
                'name' => 'Amigdalitis',
                'description' => 'Infección de las amígdalas, a menudo causada por virus o bacterias (estreptococos). Provoca dolor de garganta, fiebre y dificultad para tragar.'
            ],
            [
                'name' => 'Varicela',
                'description' => 'Infección viral altamente contagiosa causada por el virus varicela-zóster. Genera fiebre y erupciones cutáneas con ampollas muy pruriginosas.'
            ],
            [
                'name' => 'Sarampión',
                'description' => 'Enfermedad viral aguda muy contagiosa. Se manifiesta por fiebre alta, tos, conjuntivitis y una erupción característica. Puede causar complicaciones graves en niños y adultos.'
            ],
            [
                'name' => 'Rubeola',
                'description' => 'Infección viral leve que causa fiebre, ganglios inflamados y una erupción cutánea. Es peligrosa durante el embarazo, ya que puede afectar al feto.'
            ],
            [
                'name' => 'Paperas',
                'description' => 'Enfermedad viral que causa inflamación de las glándulas parótidas. Genera fiebre, dolor facial, dificultad para masticar y, en algunos casos, complicaciones testiculares o pancreáticas.'
            ],
            [
                'name' => 'Herpes labial',
                'description' => 'Infección recurrente causada por el virus del herpes simple tipo 1. Aparecen ampollas o llagas dolorosas en los labios y su contorno, especialmente en momentos de estrés o debilidad inmune.'
            ],
            [
                'name' => 'Herpes zóster',
                'description' => 'Reactivación del virus varicela-zóster que causa dolor intenso y erupciones con ampollas a lo largo de un dermatoma. Es más común en personas mayores.'
            ],
            [
                'name' => 'Verrugas',
                'description' => 'Lesiones benignas en la piel causadas por el virus del papiloma humano (VPH). Suelen aparecer en manos, pies y zonas genitales. Son contagiosas por contacto directo.'
            ],
            [
                'name' => 'Pie de atleta',
                'description' => 'Infección por hongos en los pies, común entre deportistas. Provoca picazón, descamación, mal olor y grietas entre los dedos.'
            ],
            [
                'name' => 'Gripe estacional',
                'description' => 'Variante estacional del virus influenza que circula anualmente. Provoca síntomas respiratorios y sistémicos como fiebre, tos, dolor muscular y fatiga.'
            ],
            [
                'name' => 'Influenza H1N1',
                'description' => 'Subtipo de gripe porcina humana que provocó una pandemia en 2009. Produce fiebre alta, tos, dolor de garganta y puede complicarse con neumonía viral.'
            ],
            [
                'name' => 'COVID-19',
                'description' => 'Enfermedad causada por el coronavirus SARS-CoV-2. Sus síntomas van desde leves (tos, fiebre, pérdida de olfato) hasta graves (dificultad respiratoria, neumonía, fallo multiorgánico).'
            ],
            [
                'name' => 'Otitis media',
                'description' => 'Infección del oído medio que suele presentarse en la infancia. Causa dolor intenso, fiebre y en algunos casos supuración. Puede afectar la audición temporalmente.'
            ],
            [
                'name' => 'Sinusitis',
                'description' => 'Infección o inflamación de los senos paranasales que provoca congestión nasal, presión facial, secreción nasal espesa, dolor de cabeza y fiebre. Puede ser viral, bacteriana o crónica.'
            ],
            [
                'name' => 'Obesidad',
                'description' => 'Enfermedad metabólica caracterizada por exceso de grasa corporal, con un índice de masa corporal (IMC) mayor de 30. Aumenta el riesgo de diabetes, hipertensión y enfermedades cardiovasculares.'
            ],
            [
                'name' => 'Intolerancia a la lactosa',
                'description' => 'Trastorno digestivo por deficiencia de lactasa, enzima encargada de digerir la lactosa (azúcar de la leche). Causa hinchazón, diarrea y dolor abdominal tras consumir productos lácteos.'
            ],
            [
                'name' => 'Colon irritable',
                'description' => 'Trastorno funcional intestinal que provoca dolor abdominal, cambios en el ritmo intestinal (diarrea o estreñimiento) sin causa estructural detectable. A menudo asociado al estrés.'
            ],
            [
                'name' => 'Estrés crónico',
                'description' => 'Estado prolongado de tensión emocional o física que puede afectar múltiples sistemas del cuerpo, provocando fatiga, insomnio, problemas gastrointestinales, ansiedad o inmunosupresión.'
            ],
            [
                'name' => 'Insomnio',
                'description' => 'Trastorno del sueño que impide conciliar o mantener el sueño de manera adecuada, provocando fatiga, irritabilidad, y bajo rendimiento durante el día.'
            ],
            [
                'name' => 'Ansiedad',
                'description' => 'Estado emocional caracterizado por sensación de amenaza o peligro, inquietud, taquicardia, sudoración y tensión muscular. Puede volverse patológica si interfiere con la vida diaria.'
            ],
            [
                'name' => 'Depresión',
                'description' => 'Trastorno afectivo caracterizado por tristeza profunda, pérdida de interés, fatiga, problemas de sueño, baja autoestima y pensamientos negativos o suicidas.'
            ],
            [
                'name' => 'Artritis',
                'description' => 'Inflamación de las articulaciones que causa dolor, hinchazón y rigidez. Puede ser autoinmune (reumatoide), infecciosa o relacionada al desgaste (artrosis).'
            ],
            [
                'name' => 'Artrosis',
                'description' => 'Enfermedad degenerativa articular causada por el desgaste del cartílago. Produce dolor, pérdida de movilidad y deformidades, especialmente en rodillas, caderas y manos.'
            ],
            [
                'name' => 'Síndrome de Tourette',
                'description' => 'Trastorno neurológico que se caracteriza por tics motores y vocales repetitivos e involuntarios. Suele iniciarse en la infancia y puede mejorar con la edad.'
            ],
            [
                'name' => 'Síndrome de Marfan',
                'description' => 'Enfermedad genética del tejido conectivo que afecta al sistema esquelético, ocular y cardiovascular. Personas altas, delgadas, con extremidades largas y riesgo de aneurismas aórticos.'
            ],
            [
                'name' => 'Síndrome de Rett',
                'description' => 'Trastorno del desarrollo neurológico que afecta casi exclusivamente a niñas. Tras un desarrollo normal, aparece pérdida de habilidades motoras, lenguaje y movimientos estereotipados.'
            ],
            [
                'name' => 'Síndrome de Sjögren',
                'description' => 'Enfermedad autoinmune crónica que destruye las glándulas exocrinas, causando sequedad ocular y bucal. Puede afectar órganos internos y se asocia con otras enfermedades autoinmunes.'
            ],
            [
                'name' => 'Esclerosis múltiple',
                'description' => 'Enfermedad autoinmune que afecta el sistema nervioso central. Destruye la mielina que recubre los nervios, provocando fatiga, visión doble, debilidad muscular y problemas de coordinación.'
            ],
            [
                'name' => 'ELA',
                'description' => 'Enfermedad neurodegenerativa que afecta las neuronas motoras. Causa debilidad muscular progresiva, dificultad para hablar, tragar y respirar. No tiene cura.'
            ],
            [
                'name' => 'Lupus eritematoso',
                'description' => 'Enfermedad autoinmune sistémica que puede afectar piel, articulaciones, riñones, corazón y cerebro. Provoca brotes con fiebre, erupciones, dolor articular y fatiga.'
            ],
            [
                'name' => 'Fibromialgia',
                'description' => 'Trastorno crónico caracterizado por dolor musculoesquelético generalizado, sensibilidad extrema al tacto, fatiga, insomnio y alteraciones cognitivas.'
            ],
            [
                'name' => 'Enfermedad de Crohn',
                'description' => 'Enfermedad inflamatoria intestinal crónica que puede afectar cualquier parte del tubo digestivo. Causa diarrea, dolor abdominal, pérdida de peso y anemia.'
            ],
            [
                'name' => 'Colitis ulcerosa',
                'description' => 'Enfermedad inflamatoria del colon que provoca úlceras y sangrado en el revestimiento intestinal. Se manifiesta con diarrea crónica, sangre en heces y dolor abdominal.'
            ],
            [
                'name' => 'Hemofilia',
                'description' => 'Trastorno hereditario en el que la sangre no coagula adecuadamente debido a la deficiencia de factores de coagulación (VIII o IX). Los pacientes pueden sangrar en exceso tras lesiones o de forma espontánea.'
            ],
            [
                'name' => 'Anemia falciforme',
                'description' => 'Enfermedad genética en la que los glóbulos rojos toman forma de hoz y se destruyen prematuramente, causando anemia crónica, dolor, infecciones frecuentes y problemas circulatorios.'
            ],
            [
                'name' => 'Enfermedad de Wilson',
                'description' => 'Trastorno hereditario que impide la eliminación adecuada del cobre, acumulándose en el hígado, cerebro y otros órganos. Puede causar síntomas neurológicos y hepáticos graves.'
            ],
            [
                'name' => 'Huntington',
                'description' => 'Enfermedad neurodegenerativa hereditaria que afecta la coordinación motora, el control emocional y la cognición. Es progresiva y suele comenzar entre los 30 y 50 años.'
            ],
            [
                'name' => 'Duchenne',
                'description' => 'Enfermedad genética que provoca debilidad muscular progresiva, especialmente en extremidades inferiores. Afecta mayoritariamente a varones y se manifiesta en la infancia.'
            ],
            [
                'name' => 'Cushing',
                'description' => 'Condición causada por un exceso de cortisol, ya sea por medicamentos o por tumores. Provoca obesidad central, cara redonda, hipertensión, debilidad muscular y piel fina.'
            ],
            [
                'name' => 'Turner',
                'description' => 'Alteración cromosómica que afecta a mujeres (falta total o parcial de un cromosoma X). Causa baja estatura, infertilidad y características físicas distintivas.'
            ],
            [
                'name' => 'Klinefelter',
                'description' => 'Trastorno genético que afecta a hombres con un cromosoma X extra (47,XXY). Suele provocar infertilidad, ginecomastia y dificultad para desarrollar características sexuales secundarias.'
            ],
            [
                'name' => 'Prader-Willi',
                'description' => 'Enfermedad genética que causa hambre constante, obesidad, hipotonía muscular y retraso en el desarrollo. Suele manifestarse en la infancia.'
            ],
            [
                'name' => 'Addison',
                'description' => 'Trastorno endocrino donde las glándulas suprarrenales no producen suficientes hormonas (cortisol y aldosterona). Causa fatiga, pérdida de peso, presión baja y pigmentación oscura de la piel.'
            ],
            [
                'name' => 'Tay-Sachs',
                'description' => 'Enfermedad genética rara que provoca acumulación de lípidos en las neuronas. Provoca deterioro neurológico severo, ceguera, parálisis y muerte prematura, especialmente en bebés.'
            ],
            [
                'name' => 'Fenilcetonuria',
                'description' => 'Trastorno metabólico hereditario donde no se metaboliza correctamente la fenilalanina, acumulándose en el cerebro. Puede causar retraso mental si no se trata desde el nacimiento.'
            ],
            [
                'name' => 'Galactosemia',
                'description' => 'Trastorno genético que impide metabolizar la galactosa, un azúcar de la leche. Su acumulación causa daño hepático, retraso mental y fallo renal si no se elimina de la dieta.'
            ],
            [
                'name' => 'Talasemia',
                'description' => 'Trastorno hereditario de la sangre que reduce la producción de hemoglobina. Provoca anemia crónica, crecimiento lento, fatiga y deformidades óseas.'
            ],
            [
                'name' => 'Mieloma múltiple',
                'description' => 'Cáncer de la médula ósea que afecta a las células plasmáticas. Causa lesiones óseas, anemia, infecciones y alteraciones renales.'
            ],
            [
                'name' => 'Leucemia mieloide crónica',
                'description' => 'Cáncer hematológico que afecta a las células productoras de glóbulos blancos. Se desarrolla lentamente y puede mantenerse bajo control con tratamiento crónico.'
            ],
            [
                'name' => 'Linfoma de Hodgkin',
                'description' => 'Cáncer del sistema linfático caracterizado por la presencia de células de Reed-Sternberg. Tiene un buen pronóstico con tratamiento temprano.'
            ],
            [
                'name' => 'Linfoma no Hodgkin',
                'description' => 'Grupo de cánceres linfáticos que afectan a los linfocitos B o T. Su comportamiento puede ser agresivo o indolente, dependiendo del subtipo.'
            ],
            [
                'name' => 'Melanoma',
                'description' => 'Cáncer de piel agresivo que se desarrolla a partir de los melanocitos. Puede metastatizar rápidamente. Está asociado con exposición solar intensa.'
            ],
            [
                'name' => 'Tumor Wilms',
                'description' => 'Cáncer renal infantil poco común. Se presenta como una masa abdominal en niños menores de 5 años y tiene buen pronóstico con tratamiento adecuado.'
            ],
            [
                'name' => 'Behçet',
                'description' => 'Enfermedad autoinmune rara que causa inflamación de los vasos sanguíneos. Provoca úlceras orales y genitales, erupciones cutáneas, inflamación ocular (uveítis) y, en casos graves, problemas neurológicos o vasculares.'
            ],
            [
                'name' => 'Guillain-Barré',
                'description' => 'Trastorno neurológico en el que el sistema inmunitario ataca los nervios periféricos. Comienza con debilidad en las piernas y puede avanzar hasta parálisis. Suele aparecer tras infecciones virales o bacterianas.'
            ],
            [
                'name' => 'Miastenia gravis',
                'description' => 'Enfermedad autoinmune crónica que afecta la comunicación entre los nervios y los músculos. Provoca debilidad muscular progresiva, especialmente en cara, cuello y extremidades.'
            ],
            [
                'name' => 'Leber',
                'description' => 'Trastorno genético mitocondrial que causa pérdida súbita y severa de visión central en jóvenes. Afecta ambos ojos y no suele tener tratamiento eficaz.'
            ],
            [
                'name' => 'Progeria',
                'description' => 'Enfermedad genética extremadamente rara que causa envejecimiento prematuro en niños. Se manifiesta con baja estatura, alopecia, rigidez articular y problemas cardiovasculares.'
            ],
            [
                'name' => 'Albinismo',
                'description' => 'Grupo de trastornos genéticos caracterizados por la ausencia parcial o total de pigmento en la piel, el cabello y los ojos. Puede generar fotofobia, problemas visuales y mayor riesgo de cáncer de piel.'
            ],
            [
                'name' => 'Acromegalia',
                'description' => 'Enfermedad causada por una producción excesiva de la hormona del crecimiento en adultos, generalmente por un adenoma hipofisario. Provoca crecimiento anormal de manos, pies y rasgos faciales, además de problemas cardiovasculares.'
            ],
            [
                'name' => 'Kawasaki',
                'description' => 'Vasculitis infantil aguda que afecta a niños menores de 5 años. Causa fiebre alta persistente, erupción, ojos rojos, labios agrietados y puede provocar aneurismas coronarios si no se trata a tiempo.'
            ],
            [
                'name' => 'Esclerodermia',
                'description' => 'Enfermedad autoinmune rara caracterizada por endurecimiento y fibrosis de la piel y, en casos graves, de órganos internos como pulmones y riñones.'
            ],
            [
                'name' => 'Ataxia Friedreich',
                'description' => 'Enfermedad neuromuscular hereditaria que afecta la coordinación muscular. Causa debilidad, pérdida de equilibrio, dificultad para hablar y problemas cardíacos.'
            ],
            [
                'name' => 'Xeroderma',
                'description' => 'Trastorno genético que impide reparar el daño del ADN causado por la radiación UV. Las personas afectadas tienen sensibilidad extrema al sol y alto riesgo de cáncer de piel.'
            ],
            [
                'name' => 'Angelman',
                'description' => 'Trastorno neurológico genético que causa retraso del desarrollo, ausencia del habla, convulsiones, risa frecuente y problemas de equilibrio.'
            ],
            [
                'name' => 'Moebius',
                'description' => 'Trastorno congénito raro que afecta los nervios faciales, provocando parálisis facial y falta de movimiento ocular lateral. Dificulta el habla, la alimentación y la expresión emocional.'
            ],
            [
                'name' => 'Hiperplasia suprarrenal congénita',
                'description' => 'Grupo de trastornos hereditarios en los que las glándulas suprarrenales producen cantidades anormales de hormonas sexuales. Puede causar genitales ambiguos, crecimiento precoz y desequilibrio de sodio/potasio.'
            ],
            [
                'name' => 'Porfiria',
                'description' => 'Grupo de enfermedades raras que afectan la producción del hemo (componente de la hemoglobina). Pueden provocar dolor abdominal, síntomas neurológicos y fotosensibilidad.'
            ],
            [
                'name' => 'Amiloidosis',
                'description' => 'Enfermedad rara en la que proteínas anormales (amiloides) se acumulan en tejidos y órganos, dificultando su funcionamiento. Afecta principalmente el corazón, riñones, hígado y sistema nervioso.'
            ],
            [
                'name' => 'Antifosfolípido',
                'description' => 'Trastorno autoinmune que aumenta el riesgo de trombosis venosa o arterial. Las mujeres afectadas pueden tener abortos recurrentes. Se asocia con lupus en algunos casos.'
            ],
            [
                'name' => 'Displasia ectodérmica',
                'description' => 'Grupo de trastornos hereditarios que afectan el desarrollo de la piel, cabello, dientes y glándulas sudoríparas. Los síntomas varían según el tipo.'
            ],
            [
                'name' => 'Leucodistrofia',
                'description' => 'Enfermedad hereditaria que afecta la sustancia blanca del cerebro. Provoca deterioro progresivo del habla, movilidad, y funciones cognitivas.'
            ],
            [
                'name' => 'Fanconi',
                'description' => 'Trastorno genético que causa fallo de médula ósea, anomalías congénitas y mayor riesgo de leucemia. Puede afectar el crecimiento y desarrollo físico.'
            ],
            [
                'name' => 'Tuberculosis',
                'description' => 'Infección bacteriana que afecta principalmente a los pulmones y se transmite por el aire. Puede causar tos persistente, fiebre y pérdida de peso. Sin tratamiento, puede ser mortal.'
            ],
            [
                'name' => 'Hepatitis B',
                'description' => 'Enfermedad viral del hígado que se transmite por sangre o fluidos corporales. Puede volverse crónica y provocar cirrosis o cáncer hepático. Se previene eficazmente con vacuna.'
            ],
            [
                'name' => 'Difteria',
                'description' => 'Enfermedad viral del hígado que se transmite por sangre o fluidos corporales. Puede volverse crónica y provocar cirrosis o cáncer hepático. Se previene eficazmente con vacuna.'
            ],
            [
                'name' => 'Tétanos',
                'description' => 'Infección por una toxina bacteriana que entra por heridas. Provoca rigidez muscular y espasmos intensos, sobre todo en mandíbula y cuello. Es potencialmente mortal si no se trata.'
            ],
            [
                'name' => 'Tos ferina',
                'description' => 'Enfermedad respiratoria muy contagiosa que causa ataques de tos intensos. Afecta sobre todo a bebés y puede provocar complicaciones graves. La vacuna es la mejor prevención.'
            ],
            [
                'name' => 'Haemophilus influenzae tipo B',
                'description' => 'Bacteria que puede causar meningitis, neumonía o epiglotitis en niños pequeños. Es una causa importante de enfermedades graves infantiles. La vacunación ha reducido mucho su incidencia.'
            ],
            [
                'name' => 'Poliomielitis',
                'description' => 'Enfermedad viral que puede provocar parálisis permanente, especialmente en niños. Se transmite por vía fecal-oral y afecta el sistema nervioso. Está cerca de ser erradicada gracias a la vacunación.'
            ],
            [
                'name' => 'Meningitis',
                'description' => 'Inflamación de las meninges por bacterias o virus. Los síntomas incluyen fiebre alta, rigidez de cuello y somnolencia. Puede ser mortal o dejar secuelas neurológicas si no se trata a tiempo.'
            ],
            [
                'name' => 'Cáncer de cuello uterino',
                'description' => 'Cáncer causado en la mayoría de casos por el Virus del Papiloma Humano (VPH). Se desarrolla lentamente y puede prevenirse con la vacuna y controles ginecológicos. Es uno de los más comunes en mujeres.'
            ],
            [
                'name' => 'Verrugas genitales',
                'description' => 'Lesiones benignas en la zona genital causadas por ciertos tipos del VPH. Se transmiten por contacto sexual. La vacuna previene los tipos más frecuentes.'
            ],
            [
                'name' => 'Hepatitis A',
                'description' => 'Enfermedad viral del hígado que se transmite por agua o alimentos contaminados. Generalmente es leve, pero puede ser grave en adultos. La vacuna es muy efectiva.'
            ],
            [
                'name' => 'Meningitis meningocócica',
                'description' => 'Forma grave de meningitis causada por Neisseria meningitidis. Se transmite por contacto cercano y puede progresar muy rápido. Puede prevenirse con vacuna.'
            ],
            [
                'name' => 'Fiebre amarilla',
                'description' => 'Infección viral transmitida por mosquitos en zonas tropicales. Provoca fiebre, ictericia y hemorragias. Puede ser mortal y es prevenible con una sola dosis de vacuna.'
            ],
            [
                'name' => 'Fiebre tifoidea',
                'description' => 'Infección por Salmonella typhi que se transmite por agua o alimentos contaminados. Causa fiebre alta, malestar y dolor abdominal. Es común en zonas sin acceso a agua potable.'
            ],
            [
                'name' => 'Rabia',
                'description' => 'Enfermedad viral casi siempre mortal que se transmite por mordedura de animales infectados. Afecta el sistema nervioso y provoca encefalitis. La vacuna post-exposición es salvadora.'
            ],
            [
                'name' => 'Cólera',
                'description' => 'Infección bacteriana intestinal que causa diarrea intensa y deshidratación severa. Se transmite por agua contaminada. Puede ser letal sin tratamiento rápido.'
            ],
            [
                'name' => 'Encefalitis japonesa',
                'description' => 'Infección viral transmitida por mosquitos en zonas rurales de Asia. Puede causar inflamación cerebral grave, convulsiones y coma. Se previene con una vacuna específica.'
            ],
            [
                'name' => 'Ninguna enfermedad',
                'description' => 'No padecen ninguna enfermedad.'
            ]
        ]);
    }
}
