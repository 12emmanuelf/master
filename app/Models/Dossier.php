<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable=[
      'nom'
        ];


        public function facture()
        {
            return $this->hasMany(facture::class);

        }

        public function client()
        {
            return $this->belongsto(client::class);

        }
}
