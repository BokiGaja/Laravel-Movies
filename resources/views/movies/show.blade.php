@extends('layers.master')


@section('title', 'Movie')

@section('content')
    <div class="container" style="text-align: center">
        <h1>{{ $movie->title }}</h1>
        Genre: <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a>  <br>
        Director: {{ $movie->director }} <br>
        Year: {{ $movie->year }} <br>
        Storyline: {{ $movie->storyline }}  <br>
        <a href="javascript:history.back()" class="btn btn-primary">Go back</a>
    </div>
    @include('movies.comments')
@endsection