<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Installation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Installation::create([
            'date_installation' => '2024-03-18',
            'date_dernier_verification' => '2024-03-17',
            'date_prochaine_verification' => '2025-03-18',
        ]);

        // Ajouter plusieurs installations si nécessaire
        Installation::create([
            'date_installation' => '2023-06-10',
            'date_dernier_verification' => '2024-01-05',
            'date_prochaine_verification' => '2025-01-05',
        ]);
    }
    }

