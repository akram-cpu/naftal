<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'nom_admin' => 'Doe',
                'prenom_admin' => 'John',
                'email_admin' => 'john.doe@example.com',
                'pass_admin' => bcrypt('adminpassword123')  // N'oublie pas de hacher le mot de passe
            ],
            [
                'nom_admin' => 'Smith',
                'prenom_admin' => 'Jane',
                'email_admin' => 'jane.smith@example.com',
                'pass_admin' => bcrypt('adminpassword456')
            ],
            // Ajoute d'autres lignes si nécessaire
        ]);
    }
}
