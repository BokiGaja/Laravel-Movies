<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $sideMovies = Movie::orderBy('id', 'desc')->take(5)->get();
        return view('movies.index', compact('movies', 'sideMovies'));
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

    public function addComment(Request $request, $id)
    {
        $request->validate([
            'content'=>'required'
        ]);
        Comment::create([
            'movie_id' => $id,
            'content' => $request->content
        ]);

        return redirect()->back();
    }
}
