<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citerne extends Model
{
    use HasFactory;

    
    protected $table = 'citernes';

   
    protected $fillable = [
        'reference',
        'volume',
        'longueur',
        'largeur',
        'nature_metalique',
        'date_fabrication',
        'prix',
        'date_derniere_epreuve',
        'date_prochaine_epreuve',
    ];

    
    protected $casts = [
        'date_fabrication' => 'date',
        'date_derniere_epreuve' => 'date',
        'date_prochaine_epreuve' => 'date',
    ];
}
