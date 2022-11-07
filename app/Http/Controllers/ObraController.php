<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index()
    {
        $page = Page::where('url','/obras')->first();
        return view('obra.index', ['page'=>$page]);
    }
}
