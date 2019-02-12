@extends('layers.master')


@section('title', 'Movie')

@section('content')
    <h1>{{ $movie->title }}</h1>
    Genre: {{ $movie->genre }} <br>
    Director: {{ $movie->director }} <br>
    Year: {{ $movie->year }} <br>
    Storyline: {{ $movie->storyline }}  <br>
    <a href="javascript:history.back()" class="btn btn-primary">Go back</a>
@endsection