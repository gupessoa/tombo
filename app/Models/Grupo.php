<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function artistas()
    {
        return $this->belongsToMany(Artista::class, 'artistas_grupos', 'id_grupo', 'id_artista');
    }
}
