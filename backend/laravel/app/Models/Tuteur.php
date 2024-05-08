<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'utilisateur_id',
        'nom',
        'prenom',
        'adresse',
        'email',
        'numero_tel',
    ];

    /**
     * Récupère l'utilisateur associé au tuteur.
     */
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Récupère les étudiants sous la tutelle du tuteur.
     */
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
