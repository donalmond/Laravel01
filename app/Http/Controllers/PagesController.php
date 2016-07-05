<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
//
// use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $salads = ["Waldorf", "Caesar", "Beetroot"];

        return view('pages.welcome', compact('salads'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
