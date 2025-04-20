<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('secteurs')->insert([
            ['num_region' => '01', 'code_region' => 'REG01'],
            ['num_region' => '02', 'code_region' => 'REG02'],
            // ajoute autant que tu veux ici
        ]);
    }
}
