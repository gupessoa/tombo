<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
        'data_inicial',
        'data_final',
        'id_era'
    ];

    public function geolocals()
    {
        return $this->belongsToMany(Geolocal::class, 'movimentos_geolocals', 'id_geolocal', 'id_movimento');
    }

    public function era()
    {
        return $this->belongsTo(Era::class, 'id_era', 'id');
    }
}
