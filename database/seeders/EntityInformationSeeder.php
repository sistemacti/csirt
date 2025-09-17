<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EntityInformation;
use Illuminate\Support\Facades\DB;

class EntityInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('entity_information')->count() === 0) {
            $data = [
                'name'=>'Ministerio de Telecomunicaciones y de la Sociedad de la Información',
                'email'=>'ciberseguridad@mintel.gob.ec',
                'address'=>'Av. 6 de Diciembre N25-75 y Av. Colón',
                'phone'=>'593-2 220-0200',
                'logo1'=>null,
                'logo2'=>null,
                'socials'=>null
            ];

            EntityInformation::create($data);
        }
    }
}
