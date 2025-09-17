<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ResourceType;
use Illuminate\Support\Facades\DB;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('resource_types')->count() === 0) {
            $data = ['Videos', 'Documentos', 'Descargas'];
            foreach ($data as $item) {
                ResourceType::create([
                    'name' => $item
                ]);
            }
        }
    }
}
