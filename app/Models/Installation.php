<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;

    protected $table = 'installations'; // Nom de la table

    protected $primaryKey = 'id_installation'; // Clé primaire personnalisée

    public $timestamps = true; // Active created_at et updated_at

    protected $fillable = [
        'date_installation',
        'date_dernier_verification',
        'date_prochaine_verification',
    ];
}
