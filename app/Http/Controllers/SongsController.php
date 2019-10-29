<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public function index()
    {
        $songs = DB::table('songs')->get();

        $artists = DB::table('artists')->get();

    
        $title = 'Listado de Canciones';

        return view('lista', compact('title', 'songs', 'artists'));  

    }
     
}
