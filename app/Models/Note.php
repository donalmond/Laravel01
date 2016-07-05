<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function wine() {
        return $this->belongsTo(Wine::class);
    }
}
