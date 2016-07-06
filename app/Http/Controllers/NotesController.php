<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Wine $wine)
    {
        $note = new Note;

        $note->body = $request->body;

        $wine->notes()->save($note);

        return back();
    }
}
