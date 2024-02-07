<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::insert([
            [
                'codigo_pregunta' => 'IPPJ_1',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta realizar pequeñas reparaciones de equipos electrodomésticos.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_2',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'El trabajo científico me parece muy interesante.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_3',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Sé tocar un instrumento musical o me gustaría aprender.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_4',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría cuidar personas con enfermedades mentales.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_5',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me siento bien y me las arreglo cuando tengo que organizar el trabajo de mis compañeros y compañeras. Fijarles tareas y comprobar si han sido realizadas.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_6',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta llevar mis cuadernos de manera ordenada y limpia.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_7',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría trabajar en el servicio técnico de una empresa.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_8',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría trabajar en un centro de investigación o en un laboratorio.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_9',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En el futuro me gustaría escribir poemas, guiones de películas o de juegos de video',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_10',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta mucho participar en organizaciones no gubernamentales como la Cruz Roja o una organización de jóvenes exploradores.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_11',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'A veces en la escuela soluciono conflictos de mis compañeros y compañeras.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_12',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En mi puesto de trabajo me gustaría trabajar según normas estrictamente definidas.',
                'activo_pregunta' => true,
            ],
            [
                'codigo_pregunta' => 'IPPJ_13',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me interesan los aspectos técnicos de la industria automotriz.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_14',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me interesan los descubrimientos científicos y las nuevas invenciones.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_15',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta ver exposiciones de esculturas, pintura o fotografía.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_16',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta participar en labores sociales.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_17',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En las actividades de grupo fomento el liderazgo y la coordinación.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_18',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría tener un trabajo donde tenga que realizar tareas muy precisas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_19',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Dibujar esquemas o proyectos de equipos es una tarea interesante y agradable para mí.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_20',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta hacer experimentos y observar cómo se hacen.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_21',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta participar en clases de arte, música o de literatura.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_22',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me sentiría bien ayudando a las demás personas a comprenderse.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_23',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta tomar la palabra en diferentes discusiones y convencer a la gente.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_24',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta respetar y cumplir las fechas límites.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_25',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En el futuro me gustaría trabajar con herramientas y equipos técnicos.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_26',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta ver los programas de televisión dedicados a las novedades científicas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_27',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me interesan las revistas dedicadas al arte, a los muebles y a la arquitectura.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_28',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Con muchas ganas y gran dedicación enseñaría a jóvenes cómo evitar ciertas adicciones.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_29',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría liderar un grupo de mis compañeros y compañeras para organizar una fiesta escolar.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_30',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría tener un trabajo tranquilo, con reglas o instrucciones claras.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_31',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Conozco el diseño y el funcionamiento del computador.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_32',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Cuando paseo en las montañas o en un bosque me detengo para ver de cerca plantas y árboles que no conozco.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_33',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría tocar en un grupo musical o en una orquesta.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_34',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En el futuro me gustaría trabajar con niños y niñas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_35',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Sé dar instrucciones y consejos claros a las demás personas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_36',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Por las tardes me gusta planear el trabajo que tengo que hacer al día siguiente.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_37',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría trabajar en un taller de mecánica automotriz.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_38',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría trabajar en un laboratorio de química o de biología.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_39',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría crear o componer algún tipo de música.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_40',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría ayudar a la gente a resolver sus problemas sociales.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_41',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría desempeñar la presidencia de mi clase.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_42',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En mi mesa de estudios me gusta tener todo perfectamente ordenado.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_43',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría aprender a hacer dibujos técnicos.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_44',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría realizar estudios y descubrir la vacuna contra una enfermedad grave.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_45',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría hacer dibujos para libros o crear carteles.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_46',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En mi futuro trabajo me gustaría ayudar a personas con discapacidades.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_47',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría tener un trabajo donde pudiera tomar decisiones y planear acciones para otras personas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_48',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta planificar y controlar bien mis gastos.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_49',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta aprender cómo funcionan los equipos técnicos.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_50',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría realizar estudios sobre el funcionamiento del cerebro.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_51',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'En el futuro me gustaría expresarme mediante una actividad creativa como: la pintura, el dibujo, la escultura, el baile o el canto.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_52',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría trabajar en un centro de ayuda telefónica para jóvenes.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_53',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría aprender a liderar a la gente para gestionar sus acciones.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_54',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta tener ordenada mi habitación y mi mesa de estudios.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_55',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría diseñar o arreglar máquinas y equipos modernos.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_56',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me interesan nuevas ramas de la ciencia y la tecnología.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_57',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gustaría actuar en un escenario: bailar, cantar e interpretar papeles.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_58',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me sentiría bien ayudando a personas nerviosas o tristes por algún motivo.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_59',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta dirigir el trabajo de las demás personas.',
                'activo_pregunta' => false,
            ],
            [
                'codigo_pregunta' => 'IPPJ_60',
                'catalogo_id' => 1,
                'titulo_pregunta' => 'Me gusta organizar mi trabajo día a día y para la semana.',
                'activo_pregunta' => false,
            ]
           ]);
    }
}
