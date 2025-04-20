<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CommercialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commercials')->insert([
            [
                'nom_commercial' => 'Dupont',
                'prenom_commercial' => 'Pierre',
                'email_commercial' => 'pierre.dupont@example.com',
                'pass_commercial' => bcrypt('password123')  // N'oublie pas de hacher le mot de passe
            ],
            [
                'nom_commercial' => 'Martin',
                'prenom_commercial' => 'Sophie',
                'email_commercial' => 'sophie.martin@example.com',
                'pass_commercial' => bcrypt('password456')
            ],
            // Ajoute autant de lignes que nécessaire
        ]);
    }
}
