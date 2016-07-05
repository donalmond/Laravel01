<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
//
// use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $wines = ["Shiraz", "Malbec", "Cabernet"];

        return view('pages.welcome', compact('wines'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
