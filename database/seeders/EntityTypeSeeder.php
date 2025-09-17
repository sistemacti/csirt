<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EntityType;
use Illuminate\Support\Facades\DB;

class EntityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('entity_types')->count() === 0) {
            $data = ['Pública', 'Privada', 'Educativa', 'Otro'];
            foreach ($data as $item) {
                EntityType::create([
                    'name' => $item
                ]);
            }
        }
    }
}
