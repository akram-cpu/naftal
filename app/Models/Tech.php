<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    use HasFactory;

    protected $table = 'tech';  // Déclare explicitement la table si elle n'est pas la convention

    protected $fillable = [
        'nom_tech', 
        'prenom_tech', 
        'email_tech', 
        'pass_tech'
    ];

    // Si tu utilises un mot de passe, on peut ajouter cette ligne pour qu'il soit haché automatiquement :
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tech) {
            $tech->pass_tech = bcrypt($tech->pass_tech);  // Hachage du mot de passe avant insertion
        });
    }
}
