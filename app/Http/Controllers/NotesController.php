<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Wine $wine)
    {
        // $note = new Note;
        // $note->body = $request->body;
        // $wine->notes()->save($note);

        // remember need to make this a fillable field to be able to use this method.
        // $note = new Note(['body' => $request->body]);
        // $wine->notes()->save($note);

        $card->addNotes(
            new Note($request->all())
        );

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}
