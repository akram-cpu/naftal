<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PvInstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pv_installations')->insert([
            [
                'numero_pv' => 'PV-001',
                'date_pv' => '2024-03-18',
                'observation_pv' => 'Installation réussie sans anomalies',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'numero_pv' => 'PV-002',
                'date_pv' => '2024-03-19',
                'observation_pv' => 'Petite fuite détectée, correction effectuée',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
