<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolocal extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function movimentos()
    {
        return $this->belongsToMany(Movimento::class, 'movimentos_geolocals', 'id_geolocal', 'id_movimentos');
    }
}
