<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BouteilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bouteilles')->insert([
            [
                'reference_bouteille' => 'BOT-001',
                'volume' => 10,
                'prix' => 1500.00,
                'date_fabrication' => '2023-05-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'reference_bouteille' => 'BOT-002',
                'volume' => 20,
                'prix' => 2500.00,
                'date_fabrication' => '2022-10-15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
    }

