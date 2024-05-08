<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id',
        'classe_id',
        'annee_scolaire_id',
    ];

    /**
     * Get the student associated with the inscription.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    /**
     * Get the class associated with the inscription.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    /**
     * Get the school year associated with the inscription.
     */
    public function anneeScolaire()
    {
        return $this->belongsTo(Annee_scolaire::class);
    }
}
