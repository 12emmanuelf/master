<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lbordereau extends Model
{
    use HasFactory;
    protected $fillable=[
        'prix',
        'numero',
        'quantite',
        'statut'
        ];


        public function bordereau()
        {
            return $this->belongsto(Bordereau::class);

        }

}
