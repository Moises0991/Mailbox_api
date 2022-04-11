<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    public function run()
    {
        
        function student($name, $surname, $password, $career, $email) {
            Student::create([	            
                'name' => $name,
                'surname' => $surname,
                'password' => $password,
                'career' => $career,
                'email' => $email,
            ]);
        }

        student('Andrea', 'Medina Ramirez', 'aMe*Ra', 'Terapia Fisica', '201900963@estudiantes.upqroo.edu.mx');
        student('Jafet', 'Morales Zapata', 'jMo*Za', 'Ing. Software', '201920753@estudiantes.upqroo.edu.mx');
        student('Jorge', 'Poot Castañeda', 'jPo*Ca', 'Ing. Software', '201910353@estudiantes.upqroo.edu.mx');
        student('Jose','Molar Garcia','jMo*Ga','Ing. Financiera','201905088@estudiantes.upqroo.edu.mx');
        student('Raul','Valencia Medina', 'rVa*Me','Ing. Biomedica', '201900099@estudiantes.upqroo.edu.mx');
        student('Samuel', 'Nuñes Zavala', 'sNu*Za', 'Ing. Biotecnologia', '201900599@estudiantes.upqroo.edu.mx');
        student('Nataly', 'Castañeda Dzul', 'nCa*Dz', 'Ing. Software', '201900299@estudiantes.upqroo.edu.mx');
        

        student('Erick', 'Salazar Cerrano', 'eSa*Ce', 'Ing. Software', '202053963@estudiantes.upqroo.edu.mx');
        student('Osbaldo', 'Sanches Puc', 'oSa*Pu', 'Ing. Biotecnologia', '202045753@estudiantes.upqroo.edu.mx');
        student('Manuel', 'Diaz Mejia', 'mDi*Me', 'Terapia Fisica', '20205353@estudiantes.upqroo.edu.mx');
        student('Gian Carlos','Zuñiga Ramirez','gZu*Ra','Ing. Financiera','202000088@estudiantes.upqroo.edu.mx');
        student('Adam', 'Cervantes Luna', 'aCe*Lu', 'Ing. Software', '202000299@estudiantes.upqroo.edu.mx');
        student('Joel', 'Uribe Antia', 'jUr*An', 'Ing. Biotecnologia', '202000599@estudiantes.upqroo.edu.mx');
        student('Nickole','Correa Larios', 'nCo*La','Ing. Biomedica', '202000099@estudiantes.upqroo.edu.mx');

        student('Maria', 'Valencia Garcia', 'mVa*Ga', 'Ing. biotecnologia', '202200363@estudiantes.upqroo.edu.mx');
        student('Fernando', 'Ortiz Zapata', 'fOr*Za', 'Ing. Software', '202200753@estudiantes.upqroo.edu.mx');
        student('Lucia', 'Chavez No', 'lCh*No', 'Ing. Software', '202200353@estudiantes.upqroo.edu.mx');
        student('Arturo','Morales Po','aMo*Po','Ing. Financiera','202200288@estudiantes.upqroo.edu.mx');
        student('Pedro','Garcia Perez', 'pGa*Pe','Ing. Biomedica','202230088@estudiantes.upqroo.edu.mx');
        
        // $arrays = range(0,20);
        // foreach ($arrays as $asd) {
        //   DB::table('students')->insert([	            
        //       'name' => Str::random(10),
        //       'surname' => Str::random(10),
        //       'password' => bcrypt('upqroo2022'),
        //       'career' => Str::random(10),
        //       'email' => Str::random(30),
        //   ]);
        // }

    }
}
