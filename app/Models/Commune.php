<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $fillable=
    ['nom'];

    public function Zone()
    {
        return $this->hasmany(Zone::class);
    }

    public function Client()
    {
        return $this->hasmany(client::class);
    }

    // public function ville()
    // {
    //     return $this->belongsto(ville::class);
    // }

}
