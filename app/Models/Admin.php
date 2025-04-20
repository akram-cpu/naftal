<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';  // Déclare explicitement la table si elle n'est pas la convention

    protected $fillable = [
        'nom_admin', 
        'prenom_admin', 
        'email_admin', 
        'pass_admin'
    ];

    // Si tu utilises un mot de passe, on peut ajouter cette ligne pour qu'il soit haché automatiquement :
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($admin) {
            $admin->pass_admin = bcrypt($admin->pass_admin);  // Hachage du mot de passe avant insertion
        });
    }
}
