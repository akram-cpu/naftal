<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportInstallation extends Model
{
    use HasFactory;

    protected $table = 'rapport_installation'; // Nom de la table

    protected $fillable = [
        'numero_rapport',
        'date_rapport',
        'type_rapport',
        'observation_rapport'
    ];
}
