<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function index()
    {
        $page = Page::where('url','/historia')->first();
        return view('historia.index',  ['page'=>$page]);
    }
}
