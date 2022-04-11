<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    public function run()
    {
        function report($student_id, $description, $image, $status) {
            Report::create([
                'student_id' => $student_id,
                'description' => $description,
                'image' => $image,
                'status' => $status,
            ]);
        }

        report('15', 'El proyector del aula 10 se encuentra fallando', 'image1', 'resuelto');
        report('5', 'La puerta rechina mucho al abrirse', 'image2', 'Revisado');
        report('1', 'Dos estudiantes se encuentran discutiendo y gritando', 'image3', 'Concuido');
        report('11', 'El cuarto retrete del baño de hombres no se encuentra en condiciones', 'image4', 'Concluido');
        report('18', 'El azulejo esta un poco despegado y cuando uno pasa encima, este se mueve', 'image5', 'Concluido');
        report('1', 'Hay un perro en el aula y cuando uno pasa serca, este gruñe', 'image6', 'En revision');
        report('5', 'El cuarto ordenador de la fila 3 no esta encendiendo', 'image7', 'resuelto');
        report('10', 'La pintura del aula 11 aun no ha secado y no hay señalamiento, por lo que los alumnos se estan manchando', 'image8', 'En revision');
        report('14', 'Un compañero se esta llevando un ordenador de el laboratorio de computo', 'image9', 'concluido');
        report('19', 'El aire acondicionado del aula ya no esta encendiendo', 'image11', 'Solucionado');
        report('2', 'El aire acondicionado del aula esta haciendo mucho ruido', 'image12', 'resuelto');
        report('3', 'Se rompio el cristal de una ventana', 'image13', 'solucionado');
    }
}
