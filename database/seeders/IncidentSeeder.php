<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Incident;
use Illuminate\Support\Facades\DB;

class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('incidents')->count() === 0) {
            $data = [
                'title'=>'¿Has Sufrido un Incidente de Ciberseguridad?',
                'description'=>'Si tu organización o tus datos han sido comprometidos, no esperes. Reporta un incidente al CSIRT del Ecuador para recibir asistencia especializada. Tu acción es crucial para la seguridad de todos.',
                'button_text'=>'Reportar',
                'link_button'=>null,
                'button_status'=>1
            ];
            Incident::create($data);
        }
    }
}
