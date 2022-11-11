<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Era extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_incial',
        'data_final'
    ];

    public function movimentos()
    {
        return $this->hasMany(Movimento::class, 'id_era', 'id');
    }
}
