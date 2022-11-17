<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'ano_nasc',
      'local_nasc',
      'ano_morte',
      'local_morte'
    ];

    public const RELATIONSHIP_ARTISTAS_MOVIMENTOS = 'artistas_movimentos';

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'artistas_grupos','id_artista', 'id_grupo');
    }

    public function movimentos()
    {
        return $this->belongsToMany(Movimento::class,self::RELATIONSHIP_ARTISTAS_MOVIMENTOS,'artista_id','movimento_id');
    }

    public function obras()
    {
        return $this->hasMany(Obra::class, 'artista_id', 'id');
    }
}
