<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artists

class Songs extends Model
{
    public $timestamps = true;

    public function artists()
    {
        return $this->belongsTo(Artists::class);
    }
}
