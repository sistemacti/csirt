<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutUsSeeder::class,
            AffectedInfrastructureSeeder::class,
            AffectedServiceSeeder::class,
            EntityInformationSeeder::class,
            EntityTypeSeeder::class,
            HeaderSeeder::class,
            IncidentReportSeeder::class,
            IncidentSeeder::class,
            NavbarSeeder::class,
            NewsletterSeeder::class,
            NormativeSeeder::class,
            NormativeTypeSeeder::class,
            PolicieSeeder::class,
            QuestionSeeder::class,
            ResourceAlertSeeder::class,
            ResourceSeeder::class,
            ResourceTypeSeeder::class,
            ServiceSeeder::class,
            SystemInformationSeeder::class,
            TermSeeder::class,
            ModulesSeeder::class
        ]);
    }
}
