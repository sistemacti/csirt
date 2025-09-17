<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AffectedService;
use Illuminate\Support\Facades\DB;

class AffectedServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('affected_services')->count() === 0) {
            $data = ['Redes', 'Comunicaciones', 'Servidores', 'Aplicaciones', 'Bases de Datos', 'Servicios Web', 'Plataformas Tecnológicas', 'Equipos de Telecomunicaciones', 'Correo Electrónico','Endpoints','Otros'];
            foreach ($data as $item) {
                AffectedService::create([
                    'name' => $item
                ]);
            }
        }
    }
}
