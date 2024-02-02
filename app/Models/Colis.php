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
        'nom',
        'livraison_id',
    ];

    public function livraison()
    {
        return $this->belongsTo(Livraison::class);
    }

    public function coursiers()
    {
        return $this->belongsToMany(Coursier::class, 'livraisons');
    }
}
