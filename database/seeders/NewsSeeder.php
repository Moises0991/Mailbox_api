<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        function news($admin_id, $description, $image, $num_of_reactions, $num_of_comments) {
            News::create([
                'admin_id' => $admin_id,
                'description' => $description,
                'image' => $image,
                'num_of_reactions' => $num_of_reactions,
                'num_of_comments' => $num_of_comments,
            ]);
        }

        news('1', '¡Futuros Ingenieros Biotecnólogos!  Alumnos de 2o cuatrimestre de la carrera de ingeniería en biotecnología de la Universidad Politécnica de Quintana Roo visitaron la unidad de ciencias del agua (CICY) unidad Cancún, el día de ayer 08 de abril', 'image1', '10', '2');
        news('4', '🧪🧫🧬¡BIOTECNOLOGIA EN ACCION! 🧪🧫🧬 Experimentación con bacterias y hongos, aceite biodegradable, propuestas ecológicas y muchos otros proyectos realizados por los alumnos de 5to. y 8vo. 𝗰𝘂𝗮𝘁𝗿𝗶𝗺𝗲𝘀𝘁𝗿𝗲 de la carrera de Ingeiería en Biotecnología de la universidad politecnica de Quintana Roo', 'image2', '5', '1');
        news('5', 'La UPQROO participó en la reunión para la instalación de la  Red Nacional del Centro de Creatividad e Inovacion, acción promovida por diversas universidades y  la Dirección General de Universidades Tecnológicas y Politécnicas, con la representación del Ing. Omar Guadarrama.', 'image8', '1', '1');
        news('3', '🏆La UPQROO Reconoce a la Nueva Generacion de Jovenes Trabajadores🏆 Se parte del Premio Estatal de la Juventud 2022, revisa las bases para ganar 25,000 pesos! hay 8 categorías diferentes ¡𝗣𝗔𝗥𝗧𝗜𝗖𝗜𝗣𝗔!  ¡ESCANEA EL CÓDIGO QR!  oh Regístrate aquí: https://docs.google.com/.../1FAIpQLSeepfvVASsxcX.../viewform', 'image1', '10', '2');
        news('4', 'Si eres un joven de 18 a 29 años con una idea de negocio o proyecto en marcha, 🚨¡𝙀𝙎𝙏𝘼  ES TU OPORTUNIDAD!🚀📲 Gana hasta $185,000 pesos de capital semilla del Programa Social: 𝙀𝙢𝙥𝙧𝙚𝙣𝙙𝙚 Yo te apuesto(EYTA) ¡ESCANEA EL CÓDIGO QR!  oh Regístrate aquí: https://forms.gle/Tf74izxNY9MC3Gy48', 'image1', '10', '1');
        
        news('1', '¡Elige UPQROO y transforma tu visión!  🔴EXAMEN DE ADMISION 14 DE MAYO DE 2022 ¡Conoce nuestra oferta educativa!  Consulta el link de la convocatoria https://drive.google.com/.../10fAcTffe.../view', 'image1', '10', '0');
        news('2', 'Gracias al continuo esfuerzo de las acciones del CONAVIM (Comisión Nacional Para Prevenir y Erradicar la Violencia contra las Mujeres) la Universidad politécnica de Quintana Roo, se une a la tarea de implementar estrategias de atención y seguimiento ante la violencia, y el acompañamiento constante en la esfera de la prevención dirigido a nuestra comunidad estudiantil, docentes y toda la comunidad UPQROO. Es por ello que ponemos a disposición y al alcance de todas y todos, el presente directorio de centros de atención para mujeres víctimas de violencia.', 'image1', '10', '2');
        news('6', 'La UPQROO a través de la Unidad de Bienestar Estudiantil invitan cordialmente a la comunidad estudiantil, al CURSO virtual de: “AUTOESTIMA" A cargo de la Psic. Stephanie Recinas Cancino del Instituto de Capacitación en Calidad (ICCAL) Viernes 01 de abril de 2022 10:00 Horas (QRoo) Plataforma Zoom Link https://us02web.zoom.us/j/84824856361', 'image1', '10', '4');
        news('4', '¿Estas por realizar tu servicio social, Estancias o Estadía?  El CRIT Quintana Roo tiene una oportunidad para ti, participar en la convocatoria.  Solicita informes en correa@teleton-qroo.org.mx', 'image1', '10', '0');
        news('5', 'La organización enseña por México invita a profesionistas y egresados, a participar en la Convocatoria Programa de Liderazgo y Educación 2022 | Enseña por México.  Beneficios • Beca económica mensual de manutención de $9,000 a $10,000 pesos libres de impuestos (el monto de beca varía de acuerdo al estado de asignación final para participar del programa) • Seguro de Gastos Médicos Mayores • Fortalecerás tus habilidades de liderazgo con los estudiantes y la comunidad educativa. Link de la convocatoria  https://www.ensenapormexico.org/basicamedia', 'image1', '10', '2');
    }
}
