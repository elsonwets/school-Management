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
     * Get the school year associated with the class.
     */
    public function anneeScolaire()
    {
        return $this->belongsTo(Annee_scolaire::class);
    }

    /**
     * Get the students enrolled in the class.
     */
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'inscriptions', 'classe_id', 'etudiant_id')
                    ->withTimestamps();
    }

    /**
     * Get the subjects taught in the class.
     */
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'classe_matiere', 'classe_id', 'matiere_id')
                    ->withTimestamps();
    }
}
