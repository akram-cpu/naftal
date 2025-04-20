<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Secteur extends Model
{
    use HasFactory;

    protected $table = 'secteurs'; // Nom de la table

    protected $fillable = [
        'numero_region',
        'code_secteur',
    ];
}
