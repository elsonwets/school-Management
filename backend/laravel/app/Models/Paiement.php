<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id',
        'montant',
        'mode_paiement',
        'mois_paiement',
        'date_paiement',
    ];

    /**
     * Obtenir l'étudiant associé au paiement.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
