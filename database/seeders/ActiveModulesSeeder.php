<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActiveModules;
use Illuminate\Support\Facades\DB;

class ActiveModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('active_modules')->count() === 0) {
            ActiveModules::create();
        }
    }
}
