<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DemandeSeeder extends Seeder
{
  
    public function run(): void
    {
        DB::table('demandes')->truncate();

        DB::table('demandes')->insert([
            [
                'id_demande' => 1,
                'date_demande' => '2025-03-18',
                'type_demande' => 'Nouvelle commande',
            ],
            [
                'id_demande' => 2,
                'date_demande' => '2025-03-19',
                'type_demande' => 'Renouvellement',
            ],
            [
                'id_demande' => 3,
                'date_demande' => '2025-03-20',
                'type_demande' => 'Modification',
            ],
        ]);
    }
    }

