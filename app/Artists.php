<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Songs;

class Artists extends Model
{
    
    public $timestamps = true;

    protected $fillable = ['title'];

    public function songs()
    {
        return $this->hasMany(Songs::class, 'artist_id');
    }
}
