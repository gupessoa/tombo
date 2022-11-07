<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index()
    {
        $page = Page::where('url', '=','/sobre')->first();
        return view('sobre.index', ['page' => $page]);
    }
}
