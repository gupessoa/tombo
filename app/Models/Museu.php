<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museu extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome',
        'outro_nome',
        'endereco',
        'cidade',
        'pais'
    ];
}
