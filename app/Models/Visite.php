<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;

    protected $table = 'visites'; // Nom de la table

    protected $primaryKey = 'id_visite'; // Clé primaire

    public $timestamps = true; // Active les timestamps (created_at, updated_at)

    protected $fillable = [
        'date_visite',
        'type_visite'
    ];
}
