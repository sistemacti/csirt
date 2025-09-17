<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\IncidentReport;

class IncidentReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('incident_reports')->count() === 0) {
            $data = [
                'name'=>'Roberto Daniel García Cedeño',
                'email'=>'correo@gmail.com',
                'state'=>'Ecuador',
                'phone'=>'1234567890',
                'entity'=>'Ministerio de Telecomunicaciones',
                'entity_type_id'=>1,
                'detection_date'=>'2025-09-16',
                'detection_time'=>'10:15',
                'objetive_host'=>'hostobjetivo.com',
                'origin_host'=>'hostorigin.com',
                'description'=>'Descripción de del incidente',
                'assessment'=>'Medio',
                'evident'=>1,
                'affected_service_id'=>1,
                'affected_infrastructure_id'=>1,

            ];
            IncidentReport::create($data);
        }
    }
}
