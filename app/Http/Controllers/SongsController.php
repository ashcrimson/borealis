<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Songs;

class SongsController extends Controller
{
    public function index()
    {
        $songs = Songs::all();

       
        $title = 'Listado de Canciones';

        return view('lista', compact('title', 'songs', 'artists'));  

    }
     
}
