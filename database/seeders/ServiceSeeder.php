<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('services')->count() === 0) {
            $data = [
                'title'=>'Nuestros Servicios Clave',
                'description'=>json_encode([
                    [
                        'title'=>'Respuesta a Incidentes',
                        'description'=>'Actuamos con rapidez ante ciberataques, brindando soporte técnico y estratégico para minimizar daños y restaurar la normalidad.'
                    ],
                    [
                        'title'=>'Asesoría y Consultoría',
                        'description'=>'Ofrecemos guía especializada a organizaciones públicas y privadas para fortalecer sus defensas y estrategias de ciberseguridad.'
                    ],
                    [
                        'title'=>'Concientización y Capacitación',
                        'description'=>'Educamos a ciudadanos y empresas con talleres, guías y campañas sobre las mejores prácticas para prevenir riesgos digitales.'
                    ],
                    [
                        'title'=>'Monitoreo y Alertas',
                        'description'=>'Vigilamos constantemente el ciberespacio ecuatoriano para identificar amenazas emergentes y emitir alertas tempranas.'
                    ],
                ])
            ];

            Service::create($data);
        }
    }
}
