<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;

    protected $table = 'commercials';  // Déclare explicitement la table si elle n'est pas la convention

    protected $fillable = [
        'nom_commercial', 
        'prenom_commercial', 
        'email_commercial', 
        'pass_commercial'
    ];

    // Si tu utilises un mot de passe, on peut ajouter cette ligne pour qu'il soit haché automatiquement :
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($commercial) {
            $commercial->pass_commercial = bcrypt($commercial->pass_commercial);
        });
}
}

