<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee_scolaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'annee',
        'date_debut',
        'date_fin',
    ];

    /**
     * Obtenir les classes associées à l'année scolaire.
     */
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}
