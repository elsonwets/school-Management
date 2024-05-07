<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'email',
        'image',
        'adresse',
        'sexe',
        'telephone',
        'lieu_de_naissance',
        'nationalite',
        
    ];
}
