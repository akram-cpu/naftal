<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteille extends Model
{
    use HasFactory;

    protected $table = 'bouteilles'; // Nom de la table

    protected $primaryKey = 'id_bouteille'; // Clé primaire

    public $timestamps = true; // Active les timestamps (created_at, updated_at)

    protected $fillable = [
        'reference_bouteille',
        'volume',
        'prix',
        'date_fabrication'
    ];
}
