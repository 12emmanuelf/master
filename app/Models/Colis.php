<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    protected $fillable = [
        'expedition',
        'adresse',
        'ville',
        'code_postale',
        'n_colis',
        'poids',
        'reference',
        'expediteur',
    ];

    public function Coursier()
    {
        return $this->belongsto(Coursier::class, );
    }
}
