<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients'; // Nom de la table

    protected $primaryKey = 'id_client'; // Clé primaire personnalisée

    public $timestamps = true; // Active created_at et updated_at

    protected $fillable = [
        'nom_client',
        'prenom_client',
        'adresse_client',
        'tlf_client',
    ];
}
