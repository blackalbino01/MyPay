<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function home()
    {
        return view('pages.home');
    }

    function privacy()
    {
        return view('pages.privacy');
    }

    function term()
    {
        return view('pages.terms');
    }
}
