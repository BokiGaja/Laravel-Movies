<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));

    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|integer|min:1990|max:2019',
            'storyline' => 'required|max:1000'
        ]);
        Movie::create($request->all());
        return redirect(route('movies.index'));
    }
}
