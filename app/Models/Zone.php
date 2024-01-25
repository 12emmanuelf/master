<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];

    public function coursier()
    {
        return $this->hasmany(coursier::class);

    }

    public function tarrification()
    {
        return $this->hasmany(tarrification::class);

    }
}
