<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomHabt',
        'prenomHabt',
        'contactHabt',
        'sexeHabt',
        'date_naissanceHabt',
        'date_decesHabt',
        'fonctionHabt',
        'mode_naissanceHabt',
        'mode_decesHabt',
        'lieu_habitation',
        'raison_deces',
        'nom_prenomPere',
        'nom_prenomMere',
        'nom_prenomReferent',
        'provenance',
        'mode_heberg',
        'nouvelle_destination',
    ];
}
