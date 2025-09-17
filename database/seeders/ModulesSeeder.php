<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('modules')->count() === 0) {
            $data = [
                [
                    'name'=>'Header',
                    'type'=>1
                ],
                [
                    'name'=>'Sobre Nosotros',
                    'type'=>1
                ],
                [
                    'name'=>'Servicios',
                    'type'=>1
                ],
                [
                    'name'=>'Recursos y Alertas',
                    'type'=>1
                ],
                [
                    'name'=>'Has sufrido un incidente',
                    'type'=>1
                ],
                [
                    'name'=>'FAQs',
                    'type'=>1
                ],
                [
                    'name'=>'Contacto',
                    'type'=>1
                ],
                [
                    'name'=>'Boletines',
                    'type'=>2
                ],
                [
                    'name'=>'Recursos',
                    'type'=>2
                ],
                [
                    'name'=>'Incidentes',
                    'type'=>2
                ],
                [
                    'name'=>'Políticas de seguridad',
                    'type'=>2
                ],
                [
                    'name'=>'Términos y condiciones',
                    'type'=>2
                ],
                [
                    'name'=>'Mapa del sitio',
                    'type'=>2
                ],
                [
                    'name'=>'Normativa',
                    'type'=>2
                ],
            ];

            foreach($data as $item){
                Module::create($item);
            }
        }
    }
}
