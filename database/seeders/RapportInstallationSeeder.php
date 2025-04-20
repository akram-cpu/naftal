<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RapportInstallation;
use Carbon\Carbon;

class RapportInstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RapportInstallation::create([
            'numero_rapport' => 'RAP-001',
            'date_rapport' => '2024-03-18',
            'type_rapport' => 'Inspection',
            'observation_rapport' => 'Tout est conforme aux normes.',
        ]);

        RapportInstallation::create([
            'numero_rapport' => 'RAP-002',
            'date_rapport' => '2024-03-10',
            'type_rapport' => 'Maintenance',
            'observation_rapport' => 'Besoin de remplacement de certaines pièces.',
        ]);
    }
}
