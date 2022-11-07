<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index()
    {
        $page = Page::where('url','/artistas')->first();
        return view('artista.index',  ['page'=>$page]);
    }
}
