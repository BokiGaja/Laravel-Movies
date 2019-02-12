<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre', 'LIKE', $genre)->get();
        $sideMovies = Movie::orderBy('id', 'desc')->take(5)->get();
        return view('movies.index', compact('movies', 'sideMovies'));
    }
}
