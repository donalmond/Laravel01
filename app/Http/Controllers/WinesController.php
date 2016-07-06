<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;
use App\Http\Requests;

class WinesController extends Controller
{
    public function index()
     {
         $wines = Wine::all();

         return view('wines.index', compact('wines'));
    }

    public function show(Wine $wine)
    {

        return view('wines.show', compact('wine'));

    }
}
