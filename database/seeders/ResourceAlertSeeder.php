<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ResourceAlert;
use Illuminate\Support\Facades\DB;

class ResourceAlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('resource_alerts')->count() === 0) {
            $data = [
                'title'=>'Recursos y Alertas de Ciberseguridad',
                'description'=>json_encode([
                    [
                        'title'=>'Recursos',
                        'description'=>'Lorem ipsum dolor sit amet consectetur adipiscing, elit suspendisse platea faucibus aliquam ridiculus.',
                        'image'=>null
                    ],
                    [
                        'title'=>'Noticias',
                        'description'=>'Lorem ipsum dolor sit amet consectetur adipiscing, elit suspendisse platea faucibus aliquam ridiculus.',
                        'image'=>null
                    ],
                    [
                        'title'=>'Alertas',
                        'description'=>'Lorem ipsum dolor sit amet consectetur adipiscing, elit suspendisse platea faucibus aliquam ridiculus.',
                        'image'=>null
                    ],
                ])
            ];

            ResourceAlert::create($data);
        }
    }
}
