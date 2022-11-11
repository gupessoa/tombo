<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    public function Geolocals()
    {
        return $this->belongsToMany(Geolocal::class, 'movimentos_geolocals', 'id_geolocal', 'id_movimento');
    }
}
