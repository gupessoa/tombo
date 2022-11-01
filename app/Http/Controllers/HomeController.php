<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('url','/home')->get();
        return view('home.index', ['page'=>$page]);
    }
}
