<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
    ];

    public function Commune()
    {
        return $this->belongsto(Commune::class);
    }

    public function dossier()
    {
        return $this->hasmany(dossier::class);
    }
}
