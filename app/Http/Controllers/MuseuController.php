<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class MuseuController extends Controller
{
    public function index()
    {
        $page = Page::where('url','/museus')->first();
        return view('museu.index', ['page' => $page]);
   }
}
