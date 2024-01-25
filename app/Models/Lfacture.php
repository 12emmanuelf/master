<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lfacture extends Model
{
    use HasFactory;
    protected $fillable=[
    'prix',
    'numero',
    'quantite',
    'statut'
    ];


    public function facture()
    {
        return $this->belongsto(facture::class);

    }
}