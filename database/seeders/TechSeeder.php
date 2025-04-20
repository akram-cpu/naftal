<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tech')->insert([
            [
                'nom_tech' => 'Dupont',
                'prenom_tech' => 'Alice',
                'email_tech' => 'alice.dupont@example.com',
                'pass_tech' => bcrypt('password123')  // N'oublie pas de hacher le mot de passe
            ],
            [
                'nom_tech' => 'Lemoine',
                'prenom_tech' => 'Bob',
                'email_tech' => 'bob.lemoine@example.com',
                'pass_tech' => bcrypt('password456')
            ],
            // Ajoute d'autres lignes si nécessaire
        ]);
    
    }
}
