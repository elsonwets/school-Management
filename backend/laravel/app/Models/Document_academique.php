<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document_academique extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id',
        'description',
        'fichier',
    ];

    /**
     * Get the student associated with the academic document.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
