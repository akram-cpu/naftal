<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $table = 'missions'; // Nom de la table

    protected $primaryKey = 'id_mission'; // Clé primaire

    public $timestamps = true; // Active les timestamps (created_at, updated_at)

    protected $fillable = [
        'lieu_mission',
        'type_mission',
        'date_mission'
    ];
}
