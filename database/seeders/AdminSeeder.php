<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        function admin($name, $surname, $password, $email) {
            Admin::create([	            
                'name' => $name,
                'surname' => $surname,
                'password' => $password,
                'email' => $email,
            ]);
        }

        admin('Moises', 'Soler Zetina', 'mSo*Ze', '201900365@upqroo.edu.mx');
        admin('Eduardo Israel', 'Miranda Ortega', 'eMi*Or', '201900353@upqroo.edu.mx');
        admin('Hector Ivan', 'Valencia Garcia', 'hVa*Ga', '201900753@upqroo.edu.mx');
        admin('Juan Wilbert', 'Barrera Keb', 'jBa*Ke', '201900599@upqroo.edu.mx');
        admin('Osmar David','Hernandez Duran','oHe*Du','201900088@upqroo.edu.mx');
        admin('Haydee','Ortiz Cortez', 'hOr*Co', '201900099@upqroo.edu.mx');
    }
}
