<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artists;

class ArtistsController extends Controller
{
    public function index($id)
    {
          $artista = Artists::find($id);  
          return view('artista', compact('artista'));

    }
     
}
