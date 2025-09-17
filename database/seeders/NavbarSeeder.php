<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navbar;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('navbars')->count() === 0) {
            $data = [
                [
                    'name'=>'Inicio',
                    'order'=>1
                ],
                [
                    'name'=>'Sobre Nosotros',
                    'order'=>2
                ],
                [
                    'name'=>'Boletines',
                    'order'=>3
                ],
                [
                    'name'=>'Recursos',
                    'order'=>4
                ],
                [
                    'name'=>'Reportar',
                    'order'=>5
                ],
                [
                    'name'=>'FAQs',
                    'order'=>6
                ],
                [
                    'name'=>'Contacto',
                    'order'=>7
                ],
            ];

            foreach($data as $item){
                Navbar::create($item);
            }
        }
    }
}
