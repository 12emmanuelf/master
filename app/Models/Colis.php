<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie',
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

    public function lbordereau()
    {
        return $this->hasMany(Lbordereau::class);
    }
}
