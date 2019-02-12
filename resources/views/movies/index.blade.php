@extends('layers.master')

@section('title', 'Movies')

@section('content')
    <div class="container-fluid">
        <div class="row">
        @include('inc.sidebar')
            <main role="main col-md-9" class="d-flex flex-row">
                @foreach($movies as $movie)
                    <div class="card" style="width: 18rem; background: whitesmoke; border-radius: 20%; margin-left: 20px">
                        <div class="card-body">
                            <h2 class="card-title">{{ $movie->title }}</h2>
                            Genre: <p class="card-text">{{ $movie->genre }}</p>
                            Story: <p class="card-text">{{ str_limit($movie->storyline, $limit = 30, $end='...') }}</p>
                            <a href="/movies/{{ $movie->id }}" class="btn btn-primary">Go to movie</a>
                        </div>
                    </div>
                @endforeach
            </main>
        </div>
    </div>
@endsection