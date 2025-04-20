<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CiterneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('citernes')->truncate();

        DB::table('citernes')->insert([
            [
                'reference' => 'CIT-001',
                'volume' => 5000,
                'longueur' => 10,
                'largeur' => 2.5,
                'nature_metalique' => 'Acier inoxydable',
                'date_fabrication' => '2020-05-10',
                'prix' => 15000.00,
                'date_derniere_epreuve' => '2023-06-15',
                'date_prochaine_epreuve' => '2026-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'reference' => 'CIT-002',
                'volume' => 8000,
                'longueur' => 12,
                'largeur' => 3,
                'nature_metalique' => 'Aluminium',
                'date_fabrication' => '2018-08-20',
                'prix' => 20000.00,
                'date_derniere_epreuve' => '2022-09-10',
                'date_prochaine_epreuve' => '2025-09-10',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
    }
