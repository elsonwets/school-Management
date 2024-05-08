<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'adresse',
        'email',
        'numero_tel',
        'utilisateur_id',
    ];

    /**
     * Get the user associated with the student.
     */
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the classes in which the student is enrolled.
     */
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'inscriptions', 'etudiant_id', 'classe_id')
                    ->withTimestamps();
    }
}
