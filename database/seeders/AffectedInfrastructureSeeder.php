<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AffectedInfrastructure;
use Illuminate\Support\Facades\DB;

class AffectedInfrastructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('affected_infrastructures')->count() === 0) {
            $data = ['On Premise', 'Cloud', 'Híbrida'];
            foreach ($data as $item) {
                AffectedInfrastructure::create([
                    'name' => $item
                ]);
            }
        }
    }
}
