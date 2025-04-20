<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csp extends Model
{
    use HasFactory;

    protected $table = 'csp';  // Déclare explicitement la table si elle n'est pas la convention

    protected $fillable = [
        'nom_csp', 
        'prenom_csp', 
        'email_csp', 
        'pass_csp'
    ];

    // Si tu utilises un mot de passe, on peut ajouter cette ligne pour qu'il soit haché automatiquement :
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($csp) {
            $csp->pass_csp = bcrypt($csp->pass_csp);
        });
    }
}
