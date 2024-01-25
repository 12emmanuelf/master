<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;
    protected $fillable = [
        'montantT',
        'statut',
        'date',
    ];

    public function lbordereau()
    {
        return $this->belongsto(lbordereau::class, );
    }

    public function coursier()
    {
        return $this->belongsto(coursier::class, );
    }
}
