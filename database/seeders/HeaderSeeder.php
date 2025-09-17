<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Header;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('headers')->count() === 0) {
            $data = [
                'background'=>null,
                'title'=>'Centro de Respuesta a Incidentes de Seguridad Informática del Ecuador',
                'slogan'=>'Tu Seguridad Digital, Nuestra Prioridad',
                'description'=>'Respuesta rápida a incidentes de ciberseguridad, asesoría experta y concientización para un futuro digital seguro.',
                'button_text'=>'¿Tienes una incidencia?',
                'button_status'=>1,
                'read_more_text'=>'Saber más',
                'stats'=>json_encode([
                    [
                        'label'=>'Estadísticas 1',
                        'number'=>100
                    ],
                    [
                        'label'=>'Estadísticas 2',
                        'number'=>50
                    ],
                    [
                        'label'=>'Estadísticas 3',
                        'number'=>25
                    ],
                    [
                        'label'=>'Estadísticas 4',
                        'number'=>10
                    ],
                ])
            ];

            Header::create($data);
        }
    }
}
