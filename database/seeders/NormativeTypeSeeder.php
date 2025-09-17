<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NormativeType;
use Illuminate\Support\Facades\DB;

class NormativeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('normative_types')->count() === 0) {
            $data = ['Constitución de la República', 'Ley', 'Decreto', 'Decreto Ley','Resolución','Acuerdo Ministerial','Ordenanza','Internacional','Resolución del poder ejecutivo'];
            foreach ($data as $item) {
                NormativeType::create([
                    'name' => $item
                ]);
            }
        }
    }
}
