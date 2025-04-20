<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'nom_client' => 'Dupont',
            'prenom_client' => 'Jean',
            'adresse_client' => '123 Rue Principale',
            'tlf_client' => '0612345678',
        ]);

        Client::create([
            'nom_client' => 'Martin',
            'prenom_client' => 'Sophie',
            'adresse_client' => '456 Avenue Centrale',
            'tlf_client' => '0698765432',
        ]);
    }
    }

