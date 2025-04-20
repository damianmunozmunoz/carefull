<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'description' => 'Analgésico y antipirético utilizado para reducir la fiebre y aliviar dolores leves o moderados. No tiene efecto antiinflamatorio. Es seguro si se usa en dosis adecuadas.'
            ],
            [
                'name' => 'Ibuprofeno',
                'description' => 'Antiinflamatorio no esteroideo (AINE) que alivia dolor, fiebre e inflamación. Muy usado en infecciones y dolores musculares. Puede causar irritación gástrica.'
            ],
            [
                'name' => 'Oseltamivir',
                'description' => 'Antiviral específico para la gripe (influenza). Reduce la duración y severidad si se administra en las primeras 48 horas. No funciona contra resfriados comunes.'
            ],
            [
                'name' => 'Amoxicilina',
                'description' => 'Antibiótico del grupo de las penicilinas. Actúa contra muchas bacterias respiratorias, urinarias y de oído. Es uno de los más prescritos en infecciones leves y moderadas.'
            ],
            [
                'name' => 'Ciprofloxacino',
                'description' => 'Antibiótico de amplio espectro del grupo de las fluoroquinolonas. Se usa en infecciones urinarias, digestivas y respiratorias. Requiere precaución por posibles efectos tendinosos.'
            ],
            [
                'name' => 'Prednisona',
                'description' => 'Corticoide oral con potentes efectos antiinflamatorios e inmunosupresores. Se usa en enfermedades autoinmunes, alérgicas o respiratorias. Su uso prolongado tiene efectos secundarios.'
            ],
            [
                'name' => 'Suero oral',
                'description' => 'Solución con sales y glucosa usada para prevenir o tratar la deshidratación causada por diarrea o vómitos. Fundamental en gastroenteritis infantil.'
            ],
            [
                'name' => 'Metoclopramida',
                'description' => 'Antiemético y procinético. Se usa para aliviar náuseas, vómitos y facilitar el vaciado gástrico. Puede causar somnolencia y movimientos involuntarios si se abusa.'
            ],
            [
                'name' => 'Ondansetrón',
                'description' => 'Antiemético que bloquea receptores de serotonina. Muy efectivo en vómitos por quimioterapia o gastroenteritis. Tiene pocos efectos secundarios.'
            ],
            [
                'name' => 'Cloranfenicol',
                'description' => 'Antibiótico de amplio espectro utilizado principalmente en infecciones oculares. Debe usarse con precaución por riesgo de efectos hematológicos.'
            ],
            [
                'name' => 'Tobramicina',
                'description' => 'Antibiótico del grupo aminoglucósido. Se aplica en gotas oculares para conjuntivitis y también se usa en infecciones respiratorias. Puede afectar riñón o oído si se usa sistémicamente.'
            ],
            [
                'name' => 'Ciprofloxacino',
                'description' => 'Antibiótico de amplio espectro del grupo de las fluoroquinolonas. Se usa para tratar infecciones urinarias, respiratorias y digestivas. Requiere precaución por efectos en tendones y sistema nervioso.'
            ],
            [
                'name' => 'Nitrofurantoína',
                'description' => 'Antibiótico oral específico para infecciones urinarias bajas (como la cistitis). Tiene baja resistencia bacteriana. No se recomienda en insuficiencia renal.'
            ],
            [
                'name' => 'Fluoruro',
                'description' => 'Mineral que fortalece el esmalte dental y previene caries. Se encuentra en pastas dentales y en el agua potable en muchos países.'
            ],
            [
                'name' => 'Clorhexidina',
                'description' => 'Antiséptico bucal y tópico que elimina bacterias. Se usa para gingivitis, heridas y antisepsia previa a cirugía. Su uso prolongado puede manchar los dientes.'
            ],
            [
                'name' => 'Hidrocortisona',
                'description' => 'Corticoide leve usado en forma tópica o sistémica. Alivia inflamación, picor o reacciones alérgicas. En forma oral también se usa como terapia de reemplazo en insuficiencia suprarrenal.'
            ],
            [
                'name' => 'Betametasona',
                'description' => 'Corticoide potente para uso tópico, oral o inyectable. Se emplea en afecciones inflamatorias severas o dermatológicas. Debe usarse con precaución prolongada.'
            ],
            [
                'name' => 'Cetirizina',
                'description' => 'Antihistamínico de segunda generación que alivia alergias respiratorias o cutáneas. Produce menos somnolencia que los antiguos. Muy usado en urticaria.'
            ],
            [
                'name' => 'Loratadina',
                'description' => 'Antihistamínico no sedante ampliamente usado para rinitis alérgica, conjuntivitis y urticaria. Tiene pocos efectos secundarios.'
            ],
            [
                'name' => 'Sumatriptán',
                'description' => 'Fármaco específico para migrañas. Contrae los vasos sanguíneos cerebrales aliviando el dolor. Se toma al inicio del episodio migrañoso.'
            ],
            [
                'name' => 'Topiramato',
                'description' => 'Antiepiléptico también usado para prevenir migrañas. Puede causar pérdida de peso, hormigueo y alteraciones cognitivas leves.'
            ],
            [
                'name' => 'Peróxido de benzoilo',
                'description' => 'Agente antibacteriano y queratolítico usado para tratar el acné. Reduce la producción de sebo y la inflamación local.'
            ],
            [
                'name' => 'Doxiciclina',
                'description' => 'Antibiótico de amplio espectro del grupo de las tetraciclinas. Se usa en infecciones respiratorias, cutáneas, urinarias y en acné. Puede causar fotosensibilidad.'
            ],
            [
                'name' => 'Isotretinoína',
                'description' => 'Derivado de la vitamina A para tratar acné severo. Reduce la producción de sebo. Es muy efectivo, pero requiere control por efectos secundarios serios.'
            ],
            [
                'name' => 'Salbutamol',
                'description' => 'Broncodilatador de acción rápida usado para aliviar crisis asmáticas. Relaja los músculos de las vías respiratorias. Se administra por inhalación.'
            ],
            [
                'name' => 'Budesonida inhalada',
                'description' => 'Corticoide inhalado que reduce la inflamación bronquial en asma y EPOC. Es preventivo, no para crisis agudas.'
            ],
            [
                'name' => 'Montelukast',
                'description' => 'Antiinflamatorio no esteroideo que bloquea los leucotrienos. Se usa como tratamiento de mantenimiento en el asma y la rinitis alérgica.'
            ],
            [
                'name' => 'Insulina',
                'description' => 'Hormona que regula los niveles de glucosa en sangre. Es esencial para tratar la diabetes tipo 1 y en algunos casos de tipo 2. Se administra por vía subcutánea.'
            ],
            [
                'name' => 'Metformina',
                'description' => 'Antidiabético oral que mejora la sensibilidad a la insulina y reduce la producción de glucosa hepática. Es el tratamiento de primera línea en diabetes tipo 2.'
            ],
            [
                'name' => 'Empagliflozina',
                'description' => 'Antidiabético oral del grupo de los inhibidores SGLT2. Favorece la eliminación de glucosa por la orina y reduce el riesgo cardiovascular.'
            ],
            [
                'name' => 'Enalapril',
                'description' => 'Inhibidor de la enzima convertidora de angiotensina (IECA) usado para tratar la hipertensión y la insuficiencia cardíaca. Puede causar tos seca como efecto secundario.'
            ],
            [
                'name' => 'Amlodipino',
                'description' => 'Calcioantagonista usado para tratar hipertensión y angina de pecho. Relaja los vasos sanguíneos y reduce la presión arterial. Puede provocar edema periférico.'
            ],
            [
                'name' => 'Losartán',
                'description' => 'Antagonista del receptor de angiotensina II (ARA-II). Indicado en hipertensión, insuficiencia cardíaca o protección renal en diabetes.'
            ],
            [
                'name' => 'Levotiroxina',
                'description' => 'Hormona tiroidea sintética usada en el tratamiento del hipotiroidismo. Se toma en ayunas y requiere seguimiento periódico de TSH.'
            ],
            [
                'name' => 'Metimazol',
                'description' => 'Antitiroideo que inhibe la producción de hormonas tiroideas. Se usa en hipertiroidismo, especialmente en enfermedad de Graves.'
            ],
            [
                'name' => 'Carbimazol',
                'description' => 'Pro-fármaco del metimazol, también utilizado para controlar el hipertiroidismo. Efectivo pero con riesgo de efectos hematológicos raros.'
            ],
            [
                'name' => 'Atorvastatina',
                'description' => 'Estatina que reduce los niveles de colesterol LDL. Disminuye el riesgo de eventos cardiovasculares. Puede causar dolores musculares en algunos pacientes.'
            ],
            [
                'name' => 'Simvastatina',
                'description' => 'Otra estatina hipolipemiante que actúa sobre la producción hepática de colesterol. Similar a atorvastatina pero con mayor riesgo de interacciones.'
            ],
            [
                'name' => 'Ezetimiba',
                'description' => 'Fármaco que bloquea la absorción intestinal del colesterol. Se usa sola o en combinación con estatinas para tratar la hipercolesterolemia.'
            ],
            [
                'name' => 'Sulfato ferroso',
                'description' => 'Suplemento de hierro oral utilizado en el tratamiento de la anemia ferropénica. Puede causar estreñimiento o malestar gastrointestinal.'
            ],
            [
                'name' => 'Hierro intravenoso',
                'description' => 'Administrado cuando la vía oral no es tolerada o no es suficiente. Se usa en anemia por deficiencia de hierro grave o en pacientes con enfermedades crónicas.'
            ],
            [
                'name' => 'Fosfomicina',
                'description' => 'Antibiótico oral de dosis única usado principalmente para tratar infecciones urinarias no complicadas. Tiene buena tolerancia y eficacia.'
            ],
            [
                'name' => 'Azitromicina',
                'description' => 'Antibiótico macrólido de amplio espectro. Se utiliza en infecciones respiratorias, de piel y genitales. Se suele administrar en pautas cortas de 3-5 días.'
            ],
            [
                'name' => 'Levofloxacino',
                'description' => 'Antibiótico fluoroquinolónico para infecciones graves respiratorias, urinarias o cutáneas. Puede tener efectos secundarios musculoesqueléticos y neurológicos.'
            ],
            [
                'name' => 'Penicilina',
                'description' => 'Uno de los antibióticos más antiguos y eficaces. Actúa contra muchas bacterias grampositivas. Es la base de tratamiento de infecciones como la sífilis o la faringitis estreptocócica.'
            ],
            [
                'name' => 'Aciclovir',
                'description' => 'Antiviral que impide la replicación del ADN del virus del herpes. Se utiliza en herpes labial, genital y zóster. Puede ser tópico o sistémico.'
            ],
            [
                'name' => 'Hidratación',
                'description' => 'Fundamental en muchas enfermedades como gastroenteritis, fiebre o infecciones. Ayuda a prevenir complicaciones por deshidratación.'
            ],
            [
                'name' => 'Valaciclovir',
                'description' => 'Profármaco de aciclovir con mejor absorción oral. Se emplea en infecciones por herpes simple o herpes zóster. Más cómodo que el aciclovir.'
            ],
            [
                'name' => 'Gabapentina',
                'description' => 'Fármaco neuromodulador usado en dolor neuropático, epilepsia o neuralgia postherpética. Puede causar somnolencia o mareo.'
            ],
            [
                'name' => 'Ácido salicílico',
                'description' => 'Agente queratolítico usado en tratamientos tópicos de verrugas, callosidades, acné y psoriasis. Promueve la descamación de la piel.'
            ],
            [
                'name' => 'Crioterapia',
                'description' => 'Procedimiento que utiliza nitrógeno líquido para eliminar verrugas, lesiones precancerosas o dermatológicas. Es rápido y efectivo.'
            ],
            [
                'name' => 'Clotrimazol',
                'description' => 'Antifúngico tópico que combate infecciones como el pie de atleta, candidiasis cutánea y tiña. Se aplica en forma de crema u óvulo vaginal.'
            ],
            [
                'name' => 'Zanamivir',
                'description' => 'Antiviral inhalado que inhibe la neuraminidasa del virus de la gripe. Se usa en los primeros días de infección por influenza A o B.'
            ],
            [
                'name' => 'Paxlovid',
                'description' => 'Antiviral oral aprobado para tratar COVID-19 leve a moderado en pacientes de riesgo. Disminuye la probabilidad de hospitalización.'
            ],
            [
                'name' => 'Remdesivir',
                'description' => 'Antiviral intravenoso usado en pacientes hospitalizados con COVID-19. Inhibe la replicación del virus SARS-CoV-2.'
            ],
            [
                'name' => 'Orlistat',
                'description' => 'Fármaco para el tratamiento de la obesidad. Inhibe la absorción de grasas en el intestino. Puede provocar efectos digestivos leves.'
            ],
            [
                'name' => 'Liraglutida',
                'description' => 'Análogo del GLP-1 utilizado para diabetes tipo 2 y obesidad. Disminuye el apetito y mejora el control glucémico. Se administra por inyección.'
            ],
            [
                'name' => 'Lactasa enzimática',
                'description' => 'Suplemento que proporciona la enzima lactasa, permitiendo a personas con intolerancia a la lactosa digerir productos lácteos.'
            ],
            [
                'name' => 'Mebeverina',
                'description' => 'Antiespasmódico intestinal que alivia el dolor abdominal y los calambres en el síndrome del intestino irritable.'
            ],
            [
                'name' => 'Alverina',
                'description' => 'Fármaco que relaja la musculatura del intestino. Se usa para tratar molestias digestivas funcionales como el colon irritable.'
            ],
            [
                'name' => 'Psicoterapia',
                'description' => 'Tratamiento psicológico que ayuda a manejar trastornos mentales como ansiedad, depresión, TOC y traumas. Se basa en el diálogo terapéutico.'
            ],
            [
                'name' => 'Melatonina',
                'description' => 'Hormona natural reguladora del sueño. Se utiliza como suplemento para tratar el insomnio o el jet lag, especialmente en personas mayores.'
            ],
            [
                'name' => 'Zolpidem',
                'description' => 'Hipnótico no benzodiacepínico que ayuda a conciliar el sueño. Se prescribe para el tratamiento a corto plazo del insomnio.'
            ],
            [
                'name' => 'Alprazolam',
                'description' => 'Benzodiacepina ansiolítica indicada para crisis de ansiedad o ataques de pánico. Tiene efecto sedante y puede generar dependencia.'
            ],
            [
                'name' => 'Sertralina',
                'description' => 'Antidepresivo ISRS usado para tratar depresión, ansiedad generalizada, TOC y estrés postraumático. Mejora el estado de ánimo en pocas semanas.'
            ],
            [
                'name' => 'Diazepam',
                'description' => 'Benzodiacepina de acción prolongada usada para ansiedad, espasmos musculares o como anticonvulsivo. Puede causar somnolencia y dependencia.'
            ],
            [
                'name' => 'Fluoxetina',
                'description' => 'Antidepresivo ISRS ampliamente usado. Mejora síntomas de depresión, ansiedad, bulimia y TOC. Se tolera bien, pero puede producir insomnio.'
            ],
            [
                'name' => 'Escitalopram',
                'description' => 'ISRS moderno con menor riesgo de efectos secundarios. Indicado en depresión mayor, trastorno de ansiedad y trastorno de pánico.'
            ],
            [
                'name' => 'Metotrexato',
                'description' => 'Inmunosupresor que se usa en artritis reumatoide, psoriasis y algunos tipos de cáncer. Se administra semanalmente y requiere controles frecuentes.'
            ],
            [
                'name' => 'Condroitina',
                'description' => 'Suplemento articular utilizado en el tratamiento de artrosis. Puede aliviar el dolor y mejorar la movilidad cuando se combina con glucosamina.'
            ],
            [
                'name' => 'Ácido hialurónico',
                'description' => 'Sustancia que se inyecta en articulaciones para mejorar la lubricación en artrosis. Reduce el dolor y mejora el movimiento.'
            ],
            [
                'name' => 'Haloperidol',
                'description' => 'Antipsicótico típico usado en psicosis, esquizofrenia y tics severos como en el síndrome de Tourette. Puede causar efectos extrapiramidales.'
            ],
            [
                'name' => 'Clonidina',
                'description' => 'Medicamento antihipertensivo que también se usa en tics, ansiedad o síndrome de abstinencia. Actúa en el sistema nervioso central.'
            ],
            [
                'name' => 'Beta-bloqueantes',
                'description' => 'Fármacos que disminuyen la frecuencia cardíaca y la presión arterial. Se usan en hipertensión, arritmias y prevención de migrañas.'
            ],
            [
                'name' => 'Fisioterapia',
                'description' => 'Terapia física que mejora la movilidad, fuerza y coordinación en lesiones, enfermedades musculares y trastornos neurológicos.'
            ],
            [
                'name' => 'Terapia ocupacional',
                'description' => 'Disciplina que entrena habilidades funcionales para mejorar la independencia en actividades diarias. Útil en rehabilitación neurológica y discapacidad.'
            ],
            [
                'name' => 'Pilocarpina',
                'description' => 'Medicamento que estimula la producción de saliva y lágrimas. Se utiliza en el tratamiento del síndrome de Sjögren y en el glaucoma.'
            ],
            [
                'name' => 'Natalizumab',
                'description' => 'Inmunomodulador usado en esclerosis múltiple. Bloquea la migración de células inmunes al cerebro. Requiere monitoreo por riesgo de infecciones.'
            ],
            [
                'name' => 'Riluzol',
                'description' => 'Fármaco que retrasa la progresión de la esclerosis lateral amiotrófica (ELA). Actúa modulando la liberación de glutamato.'
            ],
            [
                'name' => 'Hidroxicloroquina',
                'description' => 'Antimalárico que también se usa en enfermedades autoinmunes como lupus y artritis reumatoide. Tiene efecto inmunomodulador.'
            ],
            [
                'name' => 'Amitriptilina',
                'description' => 'Antidepresivo tricíclico usado en dolor crónico, migrañas y trastornos del sueño. Puede causar somnolencia y boca seca.'
            ],
            [
                'name' => 'Pregabalina',
                'description' => 'Neuromodulador usado en dolor neuropático, epilepsia y ansiedad generalizada. Mejora el dolor y el sueño. Puede causar mareo.'
            ],
            [
                'name' => 'Azatioprina',
                'description' => 'Inmunosupresor oral utilizado en enfermedades autoinmunes como lupus, enfermedad de Crohn o trasplantes. Requiere control hematológico.'
            ],
            [
                'name' => 'Infliximab',
                'description' => 'Anticuerpo monoclonal que bloquea el TNF-alfa. Usado en artritis reumatoide, enfermedad de Crohn y colitis ulcerosa. Se administra por infusión.'
            ],
            [
                'name' => 'Mesalazina',
                'description' => 'Antiinflamatorio intestinal derivado de la salicilina. Usado en colitis ulcerosa y enfermedad de Crohn leve. Se administra oral o rectalmente.'
            ],
            [
                'name' => 'Factor VIII y factor IX',
                'description' => 'Concentrados que reemplazan los factores de coagulación faltantes en la hemofilia A (VIII) o B (IX). Se administran por vía intravenosa.'
            ],
            [
                'name' => 'Hidroxiurea',
                'description' => 'Fármaco que aumenta la hemoglobina fetal. Reduce las crisis en la anemia falciforme. Puede causar supresión de la médula ósea.'
            ],
            [
                'name' => 'Penicilamina',
                'description' => 'Quelante del cobre usado en la enfermedad de Wilson. Ayuda a eliminar el exceso de cobre por la orina. Puede causar reacciones adversas.'
            ],
            [
                'name' => 'Trientina',
                'description' => 'Alternativa a la penicilamina para el tratamiento del exceso de cobre en la enfermedad de Wilson. Mejor tolerado en muchos pacientes.'
            ],
            [
                'name' => 'Tetrabenazina',
                'description' => 'Fármaco que reduce los movimientos involuntarios (corea) en enfermedades como el Huntington. Disminuye los niveles de dopamina.'
            ],
            [
                'name' => 'Ketoconazol',
                'description' => 'Antifúngico que también inhibe la producción de cortisol. Se usa en micosis y en el síndrome de Cushing. Puede afectar la función hepática.'
            ],
            [
                'name' => 'Hormona del crecimiento',
                'description' => 'Se usa en niños con baja estatura por déficit hormonal y en síndromes como Turner o Prader-Willi. Se administra por inyección diaria.'
            ],
            [
                'name' => 'Estrógenos',
                'description' => 'Hormonas femeninas utilizadas en terapia hormonal sustitutiva, menopausia y algunos síndromes genéticos. Deben usarse con supervisión médica.'
            ],
            [
                'name' => 'Testosterona',
                'description' => 'Hormona masculina usada en casos de hipogonadismo, síndrome de Klinefelter y terapia de reafirmación de género. Puede tener efectos secundarios metabólicos.'
            ],
            [
                'name' => 'Fludrocortisona',
                'description' => 'Mineralocorticoide que ayuda a retener sodio y mantener la presión arterial. Se usa en enfermedad de Addison y crisis adrenales.'
            ],
            [
                'name' => 'Dieta baja en fenilalanina',
                'description' => 'Dieta especial para pacientes con fenilcetonuria. Elimina alimentos con proteínas naturales que contengan fenilalanina para evitar daño cerebral.'
            ],
            [
                'name' => 'Dieta sin galactosa',
                'description' => 'Dieta terapéutica para personas con galactosemia. Evita productos lácteos y alimentos que contengan galactosa para prevenir daño hepático y neurológico.'
            ],
            [
                'name' => 'Transfusiones',
                'description' => 'Procedimiento que administra sangre o sus componentes. Se usa en anemia severa, hemorragias o enfermedades hematológicas como talasemia.'
            ],
            [
                'name' => 'Bortezomib',
                'description' => 'Inhibidor del proteasoma usado en el tratamiento del mieloma múltiple. Induce la muerte de células cancerosas. Se administra por inyección.'
            ],
            [
                'name' => 'Lenalidomida',
                'description' => 'Fármaco inmunomodulador usado en mieloma múltiple y síndromes mielodisplásicos. Deriva de la talidomida y requiere control hematológico.'
            ],
            [
                'name' => 'Imatinib',
                'description' => 'Inhibidor de tirosina quinasa que bloquea la proteína BCR-ABL. Tratamiento de primera línea en leucemia mieloide crónica. Alta eficacia con baja toxicidad.'
            ],
            [
                'name' => 'Quimioterapia',
                'description' => 'Tratamiento que usa fármacos para destruir células cancerosas o impedir su proliferación. Puede administrarse por vía oral o intravenosa. Suele causar efectos secundarios como caída del cabello, náuseas o inmunosupresión.'
            ],
            [
                'name' => 'Rituximab',
                'description' => 'Anticuerpo monoclonal dirigido contra los linfocitos B. Se usa en linfomas, leucemias y enfermedades autoinmunes como artritis reumatoide. Se administra por infusión.'
            ],
            [
                'name' => 'Pembrolizumab',
                'description' => 'Inmunoterapia (anti PD-1) usada en varios tipos de cáncer como melanoma o pulmón. Estimula al sistema inmunológico para atacar las células tumorales.'
            ],
            [
                'name' => 'Ciclosporina',
                'description' => 'Inmunosupresor que inhibe la activación de linfocitos T. Se usa en trasplantes de órganos y enfermedades autoinmunes. Requiere control de niveles y función renal.'
            ],
            [
                'name' => 'Inmunoglobina intravenosa',
                'description' => 'Solución de anticuerpos obtenida de donantes sanos. Se usa en inmunodeficiencias, enfermedades autoinmunes o inflamatorias. Se administra por vía intravenosa.'
            ],
            [
                'name' => 'Piridostigmina',
                'description' => 'Fármaco que mejora la comunicación entre nervios y músculos. Es el tratamiento principal de la miastenia gravis. Aumenta la disponibilidad de acetilcolina.'
            ],
            [
                'name' => 'Lonafarnib',
                'description' => 'Medicamento huérfano que inhibe la farnesiltransferasa. Se utiliza en el tratamiento de la progeria para retrasar el envejecimiento celular.'
            ],
            [
                'name' => 'Protección solar',
                'description' => 'Medida preventiva fundamental para evitar daños por radiación UV. Reduce el riesgo de cáncer de piel, quemaduras solares y alergias al sol.'
            ],
            [
                'name' => 'Octreótido',
                'description' => 'Análogo de la somatostatina. Se utiliza para tratar acromegalia, tumores neuroendocrinos y ciertos tipos de diarrea grave. Actúa inhibiendo hormonas.'
            ],
            [
                'name' => 'Aspirina',
                'description' => 'Antiinflamatorio y antiplaquetario que se usa para aliviar el dolor y prevenir eventos cardiovasculares. En niños puede causar síndrome de Reye.'
            ],
            [
                'name' => 'Inmunoglobina IV',
                'description' => '(Equivalente a IVIG) Se usa para mejorar la respuesta inmunitaria en pacientes con inmunodeficiencias o enfermedades autoinmunes. Se administra por infusión.'
            ],
            [
                'name' => 'Hemina',
                'description' => 'Derivado del hemo utilizado para tratar crisis de porfiria aguda. Inhibe la producción de porfirinas tóxicas en el hígado. Se administra por vía intravenosa.'
            ],
            [
                'name' => 'Melfalán',
                'description' => 'Quimioterápico usado en mieloma múltiple y amiloidosis. Inhibe la proliferación celular. Puede causar mielosupresión y requiere vigilancia hematológica.'
            ],
            [
                'name' => 'Anticoagulantes',
                'description' => 'Fármacos como heparina o warfarina que previenen la formación de coágulos sanguíneos. Se usan en trombosis, embolias y síndrome antifosfolípido.'
            ],
            [
                'name' => 'Tratamiento sintomático',
                'description' => 'Conjunto de medidas que no curan la causa de una enfermedad pero alivian los síntomas. Se usa cuando no hay cura o como complemento al tratamiento principal.'
            ],
            [
                'name' => 'Trasplante de médula',
                'description' => 'Reemplaza células madre defectuosas por células sanas de un donante. Se usa en leucemias, linfomas y enfermedades congénitas de la sangre. Requiere'
            ],
            [
                'name' => 'Fluticasona',
                'description' => 'Corticoide inhalado o nasal que reduce la inflamación. Se usa en asma, rinitis alérgica y EPOC. Ayuda a prevenir síntomas respiratorios crónicos.'
            ],
            [
                'name' => 'Inmunoterapia',
                'description' => 'Tratamiento que expone al paciente a pequeñas dosis del alérgeno para reducir la sensibilidad. Es eficaz en alergias respiratorias y de insectos.'
            ],
            [
                'name' => 'Desloratadina',
                'description' => 'Antihistamínico de segunda generación sin efecto sedante. Se usa en rinitis alérgica, urticaria y otras reacciones alérgicas leves.'
            ],
            [
                'name' => 'Adrenalina',
                'description' => 'Hormona de acción rápida usada en anafilaxia grave. Contrae vasos sanguíneos y abre las vías respiratorias. Se administra en autoinyectores.'
            ],
            [
                'name' => 'Dexclorfeniramina',
                'description' => 'Antihistamínico clásico que alivia síntomas de alergias como urticaria o rinitis. Puede producir somnolencia.'
            ],
            [
                'name' => 'Clobetasol',
                'description' => 'Corticoide tópico muy potente. Se usa en psoriasis, dermatitis severas o eccemas resistentes. No debe usarse por periodos prolongados.'
            ],
            [
                'name' => 'Dexpantenol',
                'description' => 'Derivado de la vitamina B5 usado en cremas cicatrizantes. Promueve la regeneración de la piel en quemaduras, heridas o dermatitis.'
            ],
            [
                'name' => 'Ranitidina',
                'description' => 'Fármaco que reduce la producción de ácido gástrico. Se usaba para tratar reflujo o úlceras, pero fue retirado en muchos países por contener impurezas potencialmente cancerígenas.'
            ],
            [
                'name' => 'Tacrolimus',
                'description' => 'Inmunosupresor más potente que la ciclosporina. Se usa en trasplantes y enfermedades autoinmunes como dermatitis atópica severa. Requiere vigilancia estricta.'
            ],
            [
                'name' => 'Ningún tratamiento',
                'description' => 'No tienen ningún tratamiento recetado'
            ]
        ]);
    }
}
