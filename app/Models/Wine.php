<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public  function notes()
    {
        return $this->hasMany(Note::class);
    }

    public  function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
