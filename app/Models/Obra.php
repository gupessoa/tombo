<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
        'nome_outro',
        'data',
        'tipo',
        'tamanho',
        'artista_id',
        'museu_id',
    ];

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id','id');
    }

    public function museu()
    {
        return $this->belongsTo(Museu::class, 'museu_id', 'id');
    }
}
