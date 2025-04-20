<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('csp')->insert([
            [
                'nom_csp' => 'Dupont',
                'prenom_csp' => 'Marie',
                'email_csp' => 'marie.dupont@example.com',
                'pass_csp' => bcrypt('password123')  // N'oublie pas de hacher le mot de passe
            ],
            [
                'nom_csp' => 'Lemoine',
                'prenom_csp' => 'Julien',
                'email_csp' => 'julien.lemoine@example.com',
                'pass_csp' => bcrypt('password456')
            ],
            // Ajoute d'autres exemples si nécessaire
        ]);
    }
}
