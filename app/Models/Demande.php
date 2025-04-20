<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demandes'; // Nom de la table

    protected $primaryKey = 'id_demande'; // Clé primaire personnalisée

    public $timestamps = false; // Désactiver les timestamps si pas de created_at / updated_at

    protected $fillable = [
        'id_demande',
        'date_demande',
        'type_demande',
    ];
}
