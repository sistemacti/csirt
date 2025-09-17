<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('about_us')->count() === 0) {
            $data = [
                'title'=>'¿Qué es el CSIRT del Ecuador?',
                'image'=>'null',
                'description'=>'El Centro de Respuesta a Incidentes de Seguridad Informática del Ecuador (CSIRT del Ecuador) es la entidad nacional encargada de proteger el ciberespacio del país. Nuestra misión principal es ejecutar, coordinar y apoyar la respuesta ante cualquier incidente de seguridad informática que pueda afectar a instituciones públicas, empresas privadas o ciudadanos.',
                'mission_icon'=>null,
                'mission'=>'Proteger el ciberespacio de Ecuador mediante la respuesta a incidentes, la asesoría especializada y la concientización para una cultura de ciberseguridad robusta.',
                'vision_icon'=>null,
                'vision'=>'Ser el referente nacional e internacional en ciberseguridad para Ecuador, reconocido por nuestra excelencia, liderazgo e innovación, contribuyendo a la confianza y seguridad del entorno digital.',
                'icon_values'=>null,
                'values'=>json_encode([
                    'Integridad', 'Excelencia', 'Colaboración', 'Compromiso', 'Proactividad', 'Transparencia'
                ])
            ];

            AboutUs::create($data);
        }
    }
}
