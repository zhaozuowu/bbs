<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index()
    {
        return view('static_page/index');
    }

    public function about()
    {
        return view('static_page/about');
    }

    public function help()
    {
        return view('static_page/help');
    }
}
