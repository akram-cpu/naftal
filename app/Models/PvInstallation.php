<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvInstallation extends Model
{
    use HasFactory;

    protected $table = 'pv_installations'; // Nom de la table

    protected $fillable = [
        'numero_pv',
        'date_pv',
        'observation_pv'
    ];
}
