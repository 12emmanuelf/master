<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarrification extends Model
{
    use HasFactory;
    protected $fillable = [
        'prix'
    ];

    public function zone()
    {
        return $this->belongsto(Zone::class);

    }
}
