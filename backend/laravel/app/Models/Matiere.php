<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
    ];

    /**
     * Get the classes associated with the subject.
     */
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'classe_matiere', 'matiere_id', 'classe_id')
                    ->withTimestamps();
    }

    /**
     * Get the teachers who teach the subject.
     */
    public function professeurs()
    {
        return $this->belongsToMany(Professeur::class, 'professeur_matiere', 'matiere_id', 'professeur_id')
                    ->withTimestamps();
    }

    /**
     * Get the grades associated with the subject.
     */
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
