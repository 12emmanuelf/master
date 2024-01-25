<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    protected $fillable = [
        'destinataire',
        'adresse',
        'telephpne',
        'reference',
        'nomC',
    ];

    // public function Coursier()
    // {
    //     return $this->belongsto(Coursier::class, );
    // }
}
