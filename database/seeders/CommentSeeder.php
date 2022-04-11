<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        function comment($news_id, $student_id, $comment) {
            Comment::create([
                'news_id' => $news_id,
                'student_id' => $student_id,
                'comment' => $comment,
                // 'admin_id' => $admin_id,
            ]);
        }

        comment('1', '5', 'La verdad es que fue una muy buena experiencia y aprendi cosas nuevas que podria aplicar en mi carrera');
        comment('1', '4', 'No pude ir el dia de ayer pero me hubiese gustado');

        comment('2', '1', 'Hola buenas tardes, el dia en que fecha se realizara la entrega de los resultados');
        comment('2', '5', 'No aparece mi proyecto :(');
        comment('2', '3', 'Muy buenos proyectos todos');

        comment('3', '9', 'Hola, tendran el contacto del ingeniero Omar?');

        comment('4', '18', 'Todas la carreras pueden participar?');
        comment('4', '17', 'Hasta que fecha se tiene para la inscripcion?');
        comment('4', '15', 'Ya me incribi, muchas gracias');
        comment('4', '12', 'De cuanto son los 3 primeros lugares?');
        comment('4', '11', 'La liga ya no se encuentra vigente, no se si la podrian renovar, gracias');

        comment('5', '10', 'Ya me registre, en donde podria revisar para mayor informacion?');

        comment('6', '13', 'Tienen disponible la carrera de ingenieria ambiental? es que no la encuentro');
        comment('6', '12', 'Ya realice el pago del examen de admision, se tiene que enviar a algun correo?');
        comment('6', '11', 'muchas gracias por la informacion, era justo lo que estaba buscando');

        comment('7', '5', 'Muchas gracias por la informacion');
        comment('7', '14', 'Por un mundo sin maltrato a la mujer');
        comment('7', '6', 'El directorio es para centros de atencion en todo mexico?');
        comment('7', '19', 'Se pueden hacer denuncias anonimas?');

        comment('8', '5', 'De cuanto tiempo sera la duracion del curso?');
        comment('8', '7', 'No te fijes en la duarcion, lo importante es aprender compañero');
        comment('8', '5', 'Pregunto porque tengo clase las 11 y si no entro me reprueban :(');
        comment('8', '11', 'Ya me siento mejor, a darle con todo a la universidad');
        comment('8', '10', '100% recomendadas estas platicas, me han cambiado la vida');

        comment('10', '18', 'Es un empleo?');
        comment('10', '1', 'Se puede aplicar si aun no termino mi universidad?');
    }
}
