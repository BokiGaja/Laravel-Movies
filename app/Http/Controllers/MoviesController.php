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
        $sideMovies = Movie::orderBy('id', 'desc')->limit(5)->get();
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

    public function store()
    {

        Movie::create(request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|numeric|between:1900,'.date("Y"),
            'storyline' => 'required|max:1000'
        ]));
        return redirect(route('movies.index'));
    }

    public function addComment($id)
    {
        Comment::create([
            'movie_id' => $id,
            'content' => request()->content
        ]);

        return redirect()->back();
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Movie $movie)
    {
        $movie->update(request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|numeric|between:1900,'.date("Y"),
            'storyline' => 'required|max:1000'
        ]));

        return redirect('/movies/'.$movie->id);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('movies');
    }
}
