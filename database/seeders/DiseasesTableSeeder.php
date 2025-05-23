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
                'description' => 'La gripe, también llamada influenza, es una infección respiratoria causada por virus. Cada año, millones de personas se enferman de gripe. En ocasiones, causa una enfermedad leve, pero también puede ser grave e incluso mortal, especialmente para personas mayores de 65 años, recién nacidos y personas con ciertas enfermedades crónicas.
                <br><br>La gripe es causada por el virus de la influenza que se transmite de persona a persona. Cuando alguien con gripe tose, estornuda o habla, expulsa pequeñas gotas. Estas gotitas pueden caer en la boca o en la nariz de las personas que están cerca. Con menos frecuencia, una persona puede contraer la gripe al tocar una superficie u objeto que tiene el virus de la gripe y luego tocarse la boca, la nariz o posiblemente los ojos.
                <br><br>La mayoría de las personas con gripe se recuperan solas sin atención médica. Las personas con casos leves de gripe deben quedarse en casa y evitar el contacto con otras personas, excepto para recibir atención médica. Pero si tiene síntomas de gripe y está en un grupo de alto riesgo o está muy enfermo o preocupado por su afección, contacte a su profesional de la salud. Es posible que necesite medicamentos antivirales para tratar su gripe. Los antivirales pueden aliviar la enfermedad y acortar el tiempo que esté enfermo. También pueden prevenir las complicaciones graves de la gripe. Por lo general, funcionan mejor cuando comienza a tomarlos dentro de los 2 días de haberse enfermado.
                <br><br>La mejor manera de prevenir la gripe es vacunarse todos los años. Pero también es importante tener buenos hábitos de salud, como cubrirse la tos con el brazo y lavarse las manos con frecuencia. Esto puede ayudar a detener la propagación de gérmenes y prevenir la gripe.'
            ],
            [
                'name' => 'Fiebre',
                'description' => 'La fiebre es una temperatura del cuerpo más elevada de lo normal. Una temperatura normal puede variar de persona a persona, pero generalmente es alrededor de 98.6 ºF o 37 ºC. La fiebre no es una enfermedad. Por lo general, es una señal de que su cuerpo está tratando de combatir una enfermedad o infección.
                Las infecciones causan la mayoría de las fiebres. Tiene fiebre porque su cuerpo está tratando de matar el virus o las bacterias que causaron la infección. La mayoría de estas bacterias y virus sobreviven bien cuando su cuerpo está a su temperatura normal. Pero si tiene fiebre, es más difícil para ellos sobrevivir. La fiebre también activa el sistema inmunitario de su cuerpo.
                El tratamiento depende de la causa de la fiebre. Si la fiebre es muy alta, su profesional de la salud puede recomendarle tomar medicinas de venta libre como el acetaminofén o el ibuprofén. Los adultos también pueden tomar aspirina, pero los niños con fiebre no deben tomar aspirina. También es importante beber suficientes líquidos para prevenir la deshidratación.'
            ],
            [
                'name' => 'Resfriado común',
                'description' => 'El resfriado común en la mayoría de los casos causa rinorrea o secreción nasal, congestión nasal y estornudo. Asimismo, es posible que se presente dolor de garganta, tos, dolor de cabeza u otros síntomas.
                Se denomina resfriado común por una buena razón. Hay más de mil millones de resfriados en los Estados Unidos al año. Probablemente usted y sus hijos tendrán más resfriados que cualquier otro tipo de enfermedad.
                Los resfriados son la razón más común por la cual los niños faltan a la escuela y los padres a su trabajo. Los padres usualmente contraen resfriados de sus hijos.Los niños pueden contraer muchos resfriados cada año. Por lo regular los adquieren de otros niños. Un resfriado se puede propagar rápidamente en escuelas o guarderías.Los resfriados pueden ocurrir en cualquier momento del año, pero son más comunes en invierno o en temporadas de lluvias.Un virus del resfriado se propaga a través de diminutas gotitas aéreas que se liberan cuando una persona enferma estornuda, tose o se suena la nariz.'
            ],
            [
                'name' => 'Otitis',
                'description' => 'Inflamación del oído medio, común en niños. Generalmente causada por infecciones bacterianas o virales, genera dolor de oído, fiebre, irritabilidad y, en algunos casos, pérdida temporal de audición.
                La otitis puede afectar las partes internas o las externas del oído. La afección puede ser por infección de agua en el oido o por infección crónica en el oido.'
            ],
            [
                'name' => 'Faringitis',
                'description' => 'Inflamación de la faringe, que puede ser viral o bacteriana (como por estreptococo). Provoca dolor de garganta, fiebre y dificultad para tragar.
                Su garganta es un tubo que lleva la comida al esófago y el aire a su laringe, donde se encuentran las cuerdas vocales. Técnicamente, a la garganta se le llama faringe. Se puede tener dolor de garganta por varias razones. A menudo, la causa es un resfrío y una gripe.
                El tratamiento depende de la causa. Chupar caramelos, tomar mucho líquido y hacer gárgaras puede aliviar el dolor. Analgésicos de venta libre pueden también ayudar, pero los niños no deben tomar aspirina.'
            ],
            [
                'name' => 'Laringitis',
                'description' => 'Inflamación de la laringe (cuerdas vocales) provocada por infecciones, uso excesivo de la voz o irritantes. Produce ronquera, pérdida de la voz, tos seca y dolor de garganta.
                La laringe está ubicada en la parte superior de las vías respiratorias que van a los pulmones (tráquea). La laringe contiene las cuerdas vocales. Cuando estas resultan inflamadas o infectadas, se hinchan. Esto puede causar ronquera. Algunas veces, las vías respiratorias pueden resultar bloqueadas.
                La forma más común de laringitis es una infección causada por un virus.
                Las personas con ronquera persistente que dure más de un mes (en particular los fumadores) deben consultar a un especialista en oídos, nariz y garganta (otorrinolaringólogo). Se realizará un examen de la garganta y de las vías respiratorias superiores, a menudo con un endoscopio flexible.'
            ],
            [
                'name' => 'Gastroenteritis',
                'description' => 'Infección del estómago e intestinos por virus (como rotavirus), bacterias o parásitos. Genera diarrea, vómitos, náuseas, fiebre y dolor abdominal.
                La gastroenteritis es una inflamación del revestimiento del estómago y los intestinos. Sus principales síntomas incluyen vómitos y diarrea. Por lo general, no es grave en personas sanas, pero en ocasiones puede causar deshidratación o síntomas más serios.
                La gastroenteritis viral es el tipo más común. Puede ser causada por muchos virus diferentes, incluyendo norovirus y rotavirus. Algunas personas se refieren a la gastroenteritis viral como "gripe estomacal". Sin embargo, este nombre no es médicamente correcto, ya que no es causada por el virus de la gripe. La gripe es una infección respiratoria que afecta la nariz, la garganta y los pulmones.'            ],
            [
                'name' => 'Conjuntivitis',
                'description' => 'Inflamación de la conjuntiva del ojo, provocada por virus, bacterias o alergias. Los síntomas incluyen enrojecimiento, secreción ocular, picor y lagrimeo.
                La conjuntivitis causa hinchazón, picazón, ardor, lagrimeo y enrojecimiento de la conjuntiva, la membrana delgada y translúcida que recubre la parte blanca del ojo y el interior de los párpados.
                La conjuntivitis, en general, no afecta la vista. La conjunctivitis infecciosa se contagia fácilmente de persona a persona. La infección desaparece por sí sola sin tratamiento, pero la conjuntivitis bacteriana necesita tratamiento con gotas o ungüentos antibióticos.'
            ],
            [
                'name' => 'Cistitis',
                'description' => 'Infección urinaria que afecta la vejiga. Frecuente en mujeres, se manifiesta con necesidad urgente y frecuente de orinar, ardor al orinar y dolor pélvico.
                La cistitis intersticial es una afección que causa molestias o dolor en la vejiga y una necesidad de orinar frecuente y urgentemente. Es mucho más común entre las mujeres que en los hombres. Los síntomas varían de persona a persona. Algunas pueden sentir dolor sin ganas de orinar frecuente y urgentemente. Otros tienen la urgencia sin dolor.
                Se desconoce la causa de la cistitis intersticial. No hay un examen que indique si la tiene. Los médicos suelen realizar pruebas para descartar otras posibles causas de los síntomas. No hay una cura pero los tratamientos pueden ayudar a la mayoría de las personas a sentirse mejor.'
            ],
            [
                'name' => 'Caries dental',
                'description' => 'Deterioro del esmalte dental causado por bacterias que producen ácidos al digerir azúcares. Si no se trata, puede llegar a la pulpa y provocar dolor o infecciones graves.
                La caries es el daño en la superficie o esmalte de un diente. Ocurre cuando bacterias en la boca fabrican ácido que ataca el esmalte. Las caries son huecos en el diente. Si no son tratadas, pueden causar dolor, infección e incluso pérdida de dientes.
                Nuestras bocas están llenas de bacteria. Algunas bacterias son beneficiosas, pero otras dañinas, incluyendo las que causan las caries. Estas bacterias se mezclan con la comida para formar una capa pegajosa llamada placa bacteriana. Las bacterias usan el azúcar y el almidón que usted come y toma para fabricar ácidos. Estos ácidos corroen los minerales del esmalte. Con el tiempo, la placa se endurece y forma el sarro. Además de dañar sus dientes, la placa y el sarro puede irritar sus encías y causar enfermedades de las encías.'
            ],
            [
                'name' => 'Gingivitis',
                'description' => 'Inflamación de las encías causada principalmente por acumulación de placa bacteriana. Provoca sangrado al cepillarse, enrojecimiento y dolor de encías.
                La gingivitis es el inicio de la enfermedad periodontal. La enfermedad periodontal es la inflamación e infección que destruyen los tejidos de soporte de los dientes. Esto puede incluir las encías, los ligamentos periodontales y el hueso.
                La gingivitis se debe a los efectos a corto plazo de los depósitos de placa en los dientes. La placa es un material pegajoso formado por bacterias, moco y residuos de alimentos que se acumula en los dientes por encima y debajo de las encías. También es una causa importante de caries dental.
                Si la placa no se quita, se convierte en un depósito duro denominado sarro (o cálculo) que queda atrapado en la base del diente. La placa y el sarro irritan e inflaman las encías. Un exceso de bacterias en la boca, y las toxinas que producen hacen que las encías se inflamen y se ablanden. Esto se llama una respuesta inflamatoria, que es parte de la respuesta inmunológica natural del cuerpo a la invasión de organismos.'
            ],
            [
                'name' => 'Dermatitis',
                'description' => 'Inflamación de la piel por contacto con alérgenos o irritantes. Causa enrojecimiento, picazón, ampollas o descamación. Existen múltiples tipos (atópica, de contacto, etc.).'
            ],
            [
                'name' => 'Eczema',
                'description' => 'Trastorno crónico de la piel que causa picazón intensa, enrojecimiento, inflamación y sequedad. Es común en personas con antecedentes alérgicos.
                eczema es un término que designa varios tipos distintos de hinchazón de la piel. También se llama dermatitis. La mayoría de los tipos causa sequedad y comezón en la piel, además de sarpullido en la cara, al interior de los codos y detrás de las rodillas; y en las manos y los pies. Rascarse la piel puede enrojecerla, aumentando la hinchazón y picazón.
                El eczema no es contagioso. No se conoce la causa del eczema. Es probable que sea causada por factores genéticos y ambientales. El eczema puede mejorar o empeorar con el tiempo, pero a menudo es una enfermedad de larga duración. Las personas que la padecen también pueden desarrollar fiebre del heno y asma.
                El tipo más común de eczema es la dermatitis atópica. Es más común en los bebés y los niños, pero también puede afectar a los adultos. A medida que los niños con dermatitis atópica crecen, el problema puede mejorar o desaparecer. Pero a veces la piel puede permanecer seca e irritarse fácilmente.
                Los tratamientos pueden incluir medicamentos, cremas para la piel, terapia de luz y un buen cuidado de la piel. Usted puede prevenir algunos tipos de eczema.'
            ],
            [
                'name' => 'Urticaria',
                'description' => 'Erupción cutánea con ronchas rojizas elevadas y picor intenso, causada por reacciones alérgicas, infecciones o estrés.
                La urticaria son ronchas rojizas que a veces producen picazón en la piel. Suele ser causada por una reacción alérgica a un medicamento o una comida. Las reacciones alérgicas provocan en el cuerpo la liberación de sustancias químicas que hacen que la piel se inflame y se formen las ronchas. Las personas que tienen otras alergias son más propensas a tener urticaria. Entre otras posibles causas se encuentran las infecciones y el estrés.
                La urticaria es muy común. Suele desaparecer por sí sola, pero si el caso es serio, es posible que se necesiten medicinas o una inyección. En raras ocasiones, la urticaria puede causar una inflamación peligrosa en las vías respiratorias y dificultar la respiración. Esto es una emergencia médica.'
            ],
            [
                'name' => 'Migraña',
                'description' => 'Trastorno neurológico con episodios recurrentes de dolor de cabeza intenso, generalmente pulsátil y en un solo lado. Puede ir acompañado de náuseas, vómitos y sensibilidad a la luz/sonido.
                Las migrañas son un tipo recurrente de dolor de cabeza. Causan dolor de moderado a intenso que puede ser pulsante o vibrante. A menudo, el dolor se siente a un lado de su cabeza. También puede tener otros síntomas, como náuseas y debilidad. Puede ser sensible a la luz y el sonido.
                Los investigadores piensan que las migrañas tienen una causa genética. También hay una serie de factores que pueden desencadenar una migraña. Estos factores varían de persona a persona.'
            ],
            [
                'name' => 'Acné',
                'description' => 'Afección cutánea común en adolescentes causada por obstrucción e inflamación de los folículos pilosos por exceso de sebo. Aparecen granos, espinillas y, en casos graves, nódulos o quistes.
                El acné es una enfermedad común de la piel que provoca espinillas (granos). Las espinillas se forman cuando los folículos pilosos que se encuentran debajo de la piel se tapan. La mayoría de las espinillas aparecen en el rostro, el cuello, la espalda, el pecho y los hombros. Cualquier persona puede tener acné, pero es común en los adolescentes y los adultos jóvenes. No es grave, pero puede dejar cicatrices.
                Nadie sabe exactamente cuál es la causa del acné. Es probable que los cambios hormonales, tales como los que ocurren en la adolescencia o el embarazo, tengan alguna relación con su aparición. Existen muchos mitos acerca de las causas del acné. Con frecuencia se culpa al chocolate y las comidas grasosas, pero en la mayoría de los casos hay pocas evidencias de que la comida tenga algún efecto sobre el acné. Otra creencia común es que la piel sucia puede favorecer el acné; sin embargo, los puntos negros y las espinillas no son producto de la suciedad. El estrés no produce acné, pero puede empeorarlo.'
            ],
            [
                'name' => 'Asma',
                'description' => 'Enfermedad inflamatoria crónica de las vías respiratorias, que causa dificultad para respirar, sibilancias y opresión torácica. Se desencadena por alérgenos, ejercicio o infecciones.
                El asma es una enfermedad pulmonar crónica (de largo plazo). Afecta las vías respiratorias, los conductos que llevan el aire hacia y desde los pulmones. Cuando tiene asma, sus vías respiratorias pueden inflamarse y estrecharse. Esto puede causar sibilancias, tos y opresión en el pecho. Cuando estos síntomas son peores que lo habitual, se conoce como ataque de asma o crisis asmática.
                No se conoce la causa exacta del asma. Es probable que la genética y el ambiente influyan en quién padece asma.
                Un ataque de asma puede ocurrir cuando está expuesto a un desencadenante del asma. Un desencadenante es algo que puede propiciar o empeorar los síntomas del asma.'
            ],
            [
                'name' => 'Diabetes tipo 1',
                'description' => 'Enfermedad autoinmune en la que el cuerpo destruye las células que producen insulina. Se presenta normalmente en niños o jóvenes y requiere insulina diaria para sobrevivir. Sin tratamiento adecuado, puede causar complicaciones graves como cetoacidosis.
                La diabetes indica que el nivel de glucosa, o azúcar, se encuentra muy elevado en la sangre. En la diabetes tipo 1, el páncreas no produce insulina. La insulina es una hormona que ayuda a que la glucosa penetre en las células para suministrarles energía. Sin la insulina, hay un exceso de glucosa que permanece en la sangre. Con el tiempo, los altos niveles de glucosa en la sangre pueden causarle problemas serios en el corazón, los ojos, los riñones, los nervios, las encías y los dientes.
                Un análisis de sangre puede mostrar si tiene diabetes. De ser así, deberá tomar insulina el resto de su vida. Un análisis de sangre llamado A1c puede comprobar cómo está manejando su diabetes.'
            ],
            [
                'name' => 'Diabetes tipo 2',
                'description' => 'Enfermedad metabólica caracterizada por resistencia a la insulina o su baja producción, provocando hiperglucemia. Está asociada con sobrepeso y estilo de vida sedentario.
                La diabetes tipo 2 es una enfermedad en la que los niveles de glucosa o azúcar en la sangre son demasiado altos. La glucosa es su principal fuente de energía. Proviene de los alimentos que consume. Una hormona llamada insulina ayuda a que la glucosa ingrese a las células para brindarles energía. Si tiene diabetes, su cuerpo no produce suficiente insulina o no la usa bien. Luego, la glucosa permanece en la sangre y no ingresa lo suficiente a las células.
                Con el tiempo, tener demasiada glucosa en la sangre puede causar problemas de salud. Sin embargo, se pueden tomar medidas para controlar la diabetes y tratar de prevenir estos problemas de salud.'
            ],
            [
                'name' => 'Hipertensión',
                'description' => 'Condición crónica en la que la presión arterial se mantiene elevada, lo que aumenta el riesgo de infartos, accidentes cerebrovasculares y enfermedades renales.
                La presión arterial es la fuerza de su sangre al empujar contra las paredes de sus arterias. Cada vez que su corazón late, bombea sangre hacia las arterias. Su presión arterial es más alta cuando su corazón late, bombeando la sangre. Esto se llama presión sistólica. Cuando su corazón está en reposo, entre latidos, su presión arterial baja. Esto se llama presión diastólica.
                La lectura de su presión arterial usa estos dos números. Por lo general, el número sistólico se coloca antes o por encima de la cifra diastólica. Por ejemplo, 120/80 significa una presión sistólica de 120 y una diastólica de 80.
                La presión arterial alta no tiene síntomas. Por ello, la única manera de averiguar si usted tiene presión arterial alta es a través de chequeos regulares cuando visita a su proveedor de atención médica. Su proveedor utilizará un medidor, un estetoscopio o un sensor electrónico y un manguito de presión arterial y tomará dos o más mediciones en citas médicas distintas antes de hacer un diagnóstico.'
            ],
            [
                'name' => 'Hipotiroidismo',
                'description' => 'Trastorno endocrino en el que la glándula tiroides produce menos hormonas tiroideas de las necesarias. Provoca cansancio, aumento de peso, piel seca, sensibilidad al frío y lentitud mental.
                El hipotiroidismo, o tiroides hipoactiva, ocurre cuando la glándula tiroides no produce suficientes hormonas tiroideas para satisfacer las necesidades del cuerpo.
                Su tiroides es una pequeña glándula con forma de mariposa ubicada en la parte delantera de su cuello. Produce hormonas que controlan cómo el cuerpo usa la energía. Estas hormonas afectan a casi todos los órganos de su cuerpo y controlan muchas de las funciones más importantes de su cuerpo. Por ejemplo, afectan su respiración, frecuencia cardíaca, peso, digestión y estados de ánimo. Sin suficientes hormonas tiroideas, muchas de las funciones de su cuerpo se vuelven más lentas. Sin embargo, existen tratamientos que pueden ayudar.
                El hipotiroidismo se trata con un medicamento para reemplazar la hormona que su propia tiroides no puede producir. Entre 6 a 8 semanas después de comenzar a tomar el medicamento se le realizará un análisis de sangre para verificar el nivel de su hormona tiroidea. Su profesional de la salud ajustará su dosis si es necesario. Cada vez que se ajuste su dosis, se le realizará otro análisis de sangre. Una vez que encuentre la dosis correcta, es probable que en 6 meses se someta a otro análisis de sangre. Después de eso, necesitará la prueba una vez al año.'
            ],
            [
                'name' => 'Hipertiroidismo',
                'description' => 'Condición en la que la tiroides produce un exceso de hormonas. Causa pérdida de peso, taquicardia, nerviosismo, sudoración y ojos saltones (exoftalmos en enfermedad de Graves).
                El hipertiroidismo, o tiroides hiperactiva, ocurre cuando la glándula tiroides produce más hormonas tiroideas de las que su cuerpo necesita.
                Su tiroides es una pequeña glándula con forma de mariposa ubicada en la parte delantera de su cuello. Produce hormonas que controlan cómo el cuerpo usa la energía. Estas hormonas afectan a casi todos los órganos de su cuerpo y controlan muchas de las funciones más importantes de su cuerpo. Por ejemplo, afectan su respiración, frecuencia cardíaca, peso, digestión y estados de ánimo. Si no se trata, el hipertiroidismo puede causar serios problemas del corazón, huesos, músculos, ciclo menstrual y fertilidad. Sin embargo, existen tratamientos que pueden ayudar.'
            ],
            [
                'name' => 'Colesterol alto',
                'description' => 'Elevación de los niveles de colesterol en sangre, en especial del LDL (“colesterol malo”), lo que aumenta el riesgo de enfermedades cardiovasculares como infartos o ACV.'
            ],
            [
                'name' => 'Anemia ferropénica',
                'description' => 'Deficiencia de hierro en el cuerpo que impide una correcta producción de hemoglobina. Provoca debilidad, palidez, fatiga y dificultad para concentrarse.
                La anemia es una afección en la cual el cuerpo no tiene suficientes glóbulos rojos sanos. Los glóbulos rojos le proporcionan el oxígeno a los tejidos corporales. Existen muchos tipos y causas de anemia.
                La anemia ferropénica ocurre cuando el cuerpo no tiene suficiente cantidad hierro. El hierro ayuda a producir glóbulos rojos. La anemia por deficiencia de hierro es la forma más común de anemia.
                Los glóbulos rojos llevan oxígeno a los tejidos a su cuerpo. Los glóbulos rojos se producen en la médula ósea. Los glóbulos rojos circulan por el cuerpo durante 3 a 4 meses. Partes del cuerpo, tales como el bazo, eliminan los glóbulos viejos.
                El hierro es una parte importante de los glóbulos rojos. Sin hierro para hacer hemoglobina, la sangre no puede transportar oxígeno eficazmente. Su cuerpo normalmente obtiene hierro a través de la alimentación. También reutiliza el hierro de los glóbulos rojos viejos.
                La anemia por deficiencia de hierro se presenta cuando sus reservas corporales bajan.'
            ],
            [
                'name' => 'Infección urinaria',
                'description' => 'Infección de cualquier parte del tracto urinario, siendo la más común la cistitis. Se manifiesta por ardor al orinar, orina turbia y necesidad constante de miccionar.
                El aparato urinario es el sistema de drenaje del cuerpo para eliminar los desechos y el exceso de agua. Incluye dos riñones, dos uréteres, una vejiga y una uretra. Las infecciones del tracto urinario son el segundo tipo más común de infección en el cuerpo.
                Personas de cualquier edad o sexo pueden contraer infecciones urinarias. Pero las mujeres la sufren unas cuatro veces más que los hombres. Usted también está en mayor riesgo si tiene diabetes, necesita un tubo para drenar la vejiga o tiene una lesión de la médula espinal.
                Si piensa que tiene una infección urinaria, es importante que vea a su médico. El médico puede confirmarlo con una prueba de orina. Se trata con antibióticos.'
            ],
            [
                'name' => 'Bronquitis',
                'description' => 'Inflamación de los bronquios debido a infecciones o irritantes. Produce tos persistente con mucosidad, dificultad para respirar y dolor en el pecho.
                La bronquitis es la inflamación de los conductos bronquiales, las vías respiratorias que llevan oxígeno a sus pulmones. Esta causa una tos que en forma frecuente presenta mucosidad. También causa dificultad para respirar, jadeo y presión en el pecho. Existen dos tipos de bronquitis: aguda y crónica.
                La mayoría de los casos de bronquitis aguda mejora en unos días, pero la tos puede durar varias semanas después de haberse curado la infección.
                A menudo, los mismos virus que causan el resfrío y la gripe pueden causar bronquitis aguda. Estos virus se propagan por el aire cuando alguien tose o a través del contacto físico (por ejemplo, alguien que no se haya lavado las manos). La exposición al humo del cigarrillo, contaminación del aire, polvo y gases también pueden causar bronquitis aguda. Así mismo, las bacterias pueden causar bronquitis aguda, pero no tan seguido como los virus.
                Para diagnosticar la bronquitis aguda, el médico le preguntará sobre sus síntomas y escuchará su respiración. Usted también puede tener otras pruebas.
                El tratamiento incluye descansar, tomar líquidos y aspirina (para adultos) o acetaminofén para bajar la fiebre. Un humidificador de ambientes puede ayudar. Puede necesitar inhalar medicinas para abrir sus vías respiratorias si tiene jadeo o sibilancias. Los antibióticos no le ayudarán si la causa es un virus. A usted le recetarán antibióticos si la causa es bacteriana.'
            ],
            [
                'name' => 'Neumonía',
                'description' => 'Infección pulmonar que inflama los alvéolos, los cuales pueden llenarse de líquido o pus. Causa fiebre alta, escalofríos, tos con flema, fatiga y dolor torácico.
                La neumonía es una infección en uno o ambos pulmones. Causa que los alvéolos pulmonares se llenen de líquido o pus. Puede variar de leve a grave, dependiendo de la causa de la infección, su edad y su estado general de salud.
                Los virus que infectan las vías respiratorias pueden causar neumonía. A menudo, la neumonía viral es leve y desaparece por sí sola en pocas semanas. Pero en ocasiones es lo suficientemente grave como para necesitar tratamiento en un hospital. Si tiene neumonía viral, corre el riesgo de contraer también neumonía bacteriana.'
            ],
            [
                'name' => 'Amigdalitis',
                'description' => 'Infección de las amígdalas, a menudo causada por virus o bacterias (estreptococos). Provoca dolor de garganta, fiebre y dificultad para tragar.
                Las amígdalas son masas de tejido en la parte posterior de la garganta. Hay dos de ellas, una a cada lado. Junto con las adenoides, las amígdalas son parte del sistema linfático. El sistema linfático elimina las infecciones y mantiene equilibrados los fluidos corporales. Las adenoides y las amígdalas atrapan gérmenes que entran por la boca y la nariz.'
            ],
            [
                'name' => 'Varicela',
                'description' => 'Infección viral altamente contagiosa causada por el virus varicela-zóster. Genera fiebre y erupciones cutáneas con ampollas muy pruriginosas.
                La varicela es una infección causada por el virus de la varicela zoster. La mayoría de los casos se da en niños menores de 15 años de edad, pero también puede observarse en niños más grandes y adultos. Se disemina muy fácilmente de una persona a otra.'
            ],
            [
                'name' => 'Sarampión',
                'description' => 'Enfermedad viral aguda muy contagiosa. Se manifiesta por fiebre alta, tos, conjuntivitis y una erupción característica. Puede causar complicaciones graves en niños y adultos.
                El sarampión es una enfermedad infecciosa causada por un virus. Se disemina fácilmente de persona a persona y causa una erupción en la piel de color roja con manchas. Esta erupción suele comenzar en la cabeza y descender al resto del cuerpo.
                Es posible que haya oído hablar sobre la rubéola, que es otra enfermedad que causa erupción y picazón pero que no está relacionada con el sarampión.'
            ],
            [
                'name' => 'Rubeola',
                'description' => 'Infección viral leve que causa fiebre, ganglios inflamados y una erupción cutánea. Es peligrosa durante el embarazo, ya que puede afectar al feto.
                La rubéola es una infección causada por un virus. Generalmente, es leve y se presenta con fiebre y erupción aunque la mitad de las personas que la tienen no presentan síntomas.
                La rubéola se contagia cuando una persona tose o estornuda. La gente que no presenta síntomas también puede contagiarla. No hay tratamiento, por lo tanto, lo mejor es prevenirla con la vacuna. En Estados Unidos, ésta se llama MMR que es una vacuna combinada para el sarampión, paperas y rubéola.'
            ],
            [
                'name' => 'Paperas',
                'description' => 'Enfermedad viral que causa inflamación de las glándulas parótidas. Genera fiebre, dolor facial, dificultad para masticar y, en algunos casos, complicaciones testiculares o pancreáticas.
                Se puede adquirir paperas por estar con otra persona que tenga la enfermedad. No existe un tratamiento para las paperas, pero la vacuna contra las paperas, el sarampión y la rubéola (triple viral o MMR, por sus siglas en inglés) pueden prevenirla.
                Antes de los programas de vacunación en los Estados Unidos, las paperas era una enfermedad muy común entre recién nacidos, bebés y jóvenes. En la actualidad, esta enfermedad es muy poco frecuente.'
            ],
            [
                'name' => 'Herpes labial',
                'description' => 'Infección recurrente causada por el virus del herpes simple tipo 1. Aparecen ampollas o llagas dolorosas en los labios y su contorno, especialmente en momentos de estrés o debilidad inmune.
                El herpes labial es causado por un virus muy contagioso llamado herpes simple (VHS). Existen dos tipos de VHS. El tipo 1 en general causa herpes oral o labial. Este infecta a más de la mitad de la población de los EE. UU. para cuando llega a los 20 años. El tipo 2 en general afecta el área genital.
                Algunas personas no tienen síntomas de la infección. Sin embargo, otras desarrollan llagas dolorosas y desagradables. El herpes labial suele aparecer fuera de la boca o en los labios o alrededor. Cuando están dentro de la boca, en general es en las encías o en el paladar. No son lo mismo que las aftas bucales, que no son contagiosas.
                No existe una cura para el herpes labial. Por lo general desaparece por sí solo en un par de semanas. Los medicamentos antivirales pueden ayudar a que sane más rápido. También pueden ayudar a prevenir su aparición en personas con brotes frecuentes. Otras medicinas pueden ayudar con el dolor y la molestia que causan. Estos incluyen ungüentos que adormecen las llagas, ablandan las costras o que las secan. Proteger tus labios con bloqueador solar también puede ayudar.'
            ],
            [
                'name' => 'Herpes zóster',
                'description' => 'Reactivación del virus varicela-zóster que causa dolor intenso y erupciones con ampollas a lo largo de un dermatoma. Es más común en personas mayores.
                La culebrilla o herpes zóster es una infección que causa una dolorosa erupción. Es causada por el virus de la varicela-zoster, el mismo que causa la varicela. Después de tener varicela, el virus permanece en su cuerpo. Puede que no cause problemas por muchos años, pero a medida que envejece, el virus puede volver a activarse y causar culebrilla.'
            ],
            [
                'name' => 'Verrugas',
                'description' => 'Lesiones benignas en la piel causadas por el virus del papiloma humano (VPH). Suelen aparecer en manos, pies y zonas genitales. Son contagiosas por contacto directo.
                Las verrugas son crecimientos del tejido en la piel causados por una infección por el virus del papiloma humano o VPH.'
            ],
            [
                'name' => 'Pie de atleta',
                'description' => 'Infección por hongos en los pies, común entre deportistas. Provoca picazón, descamación, mal olor y grietas entre los dedos.
                El pie de atleta es una infección común en el pie causada por hongos que afecta el área entre los dedos. Los síntomas incluyen picazón, ardor y piel quebradiza y escamosa entre los dedos de los pies.
                Se puede contagiar el pie de atleta al pisar superficies húmedas, como por ejemplo, las duchas, las piscinas y los pisos de los vestidores.'
            ],
            [
                'name' => 'Gripe estacional',
                'description' => 'Variante estacional del virus influenza que circula anualmente. Provoca síntomas respiratorios y sistémicos como fiebre, tos, dolor muscular y fatiga.'
            ],
            [
                'name' => 'Influenza H1N1',
                'description' => 'Subtipo de gripe porcina humana que provocó una pandemia en 2009. Produce fiebre alta, tos, dolor de garganta y puede complicarse con neumonía viral.
                La gripe porcina es una infección causada por un virus. Se llama así por un virus que los cerdos contraen. La gente, generalmente, no contrae esta gripe pero pueden darse infecciones. En 2009, una cepa de gripe porcina llamada H1N1 infectó a varias personas alrededor del mundo.
                El virus es contagioso y puede diseminarse de persona a persona. Los síntomas de la gripe porcina son similares a los síntomas de la gripe común e incluyen fiebre, tos, picazón de garganta, dolor muscular, dolor de cabeza, escalofríos y fatiga.'
            ],
            [
                'name' => 'COVID-19',
                'description' => 'Enfermedad causada por el coronavirus SARS-CoV-2. Sus síntomas van desde leves (tos, fiebre, pérdida de olfato) hasta graves (dificultad respiratoria, neumonía, fallo multiorgánico).
                La enfermedad del coronavirus 2019 (COVID-19) es causada por un virus. Este virus es un coronavirus llamado SARS-COV-2. Se propaga cuando una persona con la infección expulsa gotitas y partículas muy pequeñas que contienen el virus.'
            ],
            [
                'name' => 'Otitis media',
                'description' => 'Infección del oído medio que suele presentarse en la infancia. Causa dolor intenso, fiebre y en algunos casos supuración. Puede afectar la audición temporalmente.'
            ],
            [
                'name' => 'Sinusitis',
                'description' => 'Infección o inflamación de los senos paranasales que provoca congestión nasal, presión facial, secreción nasal espesa, dolor de cabeza y fiebre. Puede ser viral, bacteriana o crónica.
                Sinusitis consiste en la inflamación de los senos paranasales. Esto puede ser por una infección u otro problema. Los senos paranasales son espacios huecos donde pasa el aire por el interior de los huesos que rodean la nariz. Producen secreción mucosa que drena hacia la nariz. Si la nariz está inflamada, puede bloquear los senos paranasales y causar dolor.'
            ],
            [
                'name' => 'Obesidad',
                'description' => 'Enfermedad metabólica caracterizada por exceso de grasa corporal, con un índice de masa corporal (IMC) mayor de 30. Aumenta el riesgo de diabetes, hipertensión y enfermedades cardiovasculares.
                Obesidad significa tener un exceso de grasa en el cuerpo. Se diferencia del sobrepeso, que significa pesar demasiado. El peso puede ser resultado de la masa muscular, los huesos, la grasa y/o el agua en el cuerpo. Ambos términos significan que el peso de una persona es mayor de lo que se considera saludable según su estatura.
                La obesidad se presenta con el transcurso del tiempo, cuando se ingieren más calorías que aquellas que quema. El equilibrio entre la ingestión de calorías y las calorías que se pierden es diferente en cada persona. Entre los factores que pueden afectar su peso se incluyen la constitución genética, el exceso de comida, el consumo de alimentos ricos en grasas y la falta de actividad física.
                La obesidad aumenta el riesgo de padecer diabetes, enfermedades cardiacas, derrames cerebrales, artritis y ciertos cánceres. Si usted está obeso, perder por lo menos de 5 a 10% de su peso puede retrasar o prevenir algunas de estas enfermedades. Por ejemplo, si usted pesa 200 libras, el 5 al 10% serían unas 10 a 20 libras.'
            ],
            [
                'name' => 'Intolerancia a la lactosa',
                'description' => 'Trastorno digestivo por deficiencia de lactasa, enzima encargada de digerir la lactosa (azúcar de la leche). Causa hinchazón, diarrea y dolor abdominal tras consumir productos lácteos.
                Intolerancia a la lactosa significa que usted no puede digerir alimentos que contienen lactosa. La lactosa es el azúcar que se encuentra en la leche y los alimentos preparados con leche. Después de ingerir alimentos que contienen lactosa, es posible que tenga malestar estomacal.'
            ],
            [
                'name' => 'Colon irritable',
                'description' => 'Trastorno funcional intestinal que provoca dolor abdominal, cambios en el ritmo intestinal (diarrea o estreñimiento) sin causa estructural detectable. A menudo asociado al estrés.
                El síndrome del intestino irritable es un problema que afecta al intestino grueso. Puede causar cólicos abdominales, distensión y cambios en los hábitos intestinales. Algunas personas con este trastorno tienen estreñimiento, otras tienen diarrea. Algunas pasan de un cuadro de estreñimiento a uno de diarrea. Aun cuando el síndrome del intestino irritable puede causar muchas molestias, no daña el intestino.
                El síndrome del intestino irritable es un cuadro común. Las mujeres lo sufren el doble más que en los hombres, y es más común en personas menores de 45 años. No se conoce la causa exacta de este síndrome, ni tampoco existe una prueba específica para diagnosticarlo. Su médico puede realizar exámenes para estar seguros que no tiene otras enfermedades. Estas pruebas pueden incluir análisis de heces, de sangre y radiografías. El médico también puede practicarle un estudio llamado sigmoidoscopía o colonoscopía. La mayoría de las personas con diagnóstico de síndrome del intestino irritable puede controlar sus síntomas con dieta, manejo del estrés, probióticos y medicinas.'
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
