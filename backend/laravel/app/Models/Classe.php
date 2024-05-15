<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'niveau',
        'nom_classe',
        'annee_scolaire_id',
    ];

    /**
     * Obtenir l'année scolaire associée à la classe.
     */
    public function anneeScolaire()
    {
        return $this->belongsTo(Annee_scolaire::class);
    }

    /**
     * Obtenir les étudiants inscrits dans la classe.
     */
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'inscriptions', 'classe_id', 'etudiant_id')
                    ->withTimestamps();
    }

    /**
     * Obtenir les matières enseignées dans la classe.
     */
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'classe_matiere', 'classe_id', 'matiere_id')
                    ->withTimestamps();
    }
}
