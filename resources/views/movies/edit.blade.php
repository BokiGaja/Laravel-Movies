@extends('layers.master')

@section('content')
    <div class="container">
    <h1>Edit movie</h1>
        <a href="javascript:history.back()" class="btn btn-primary">Go back</a>
    <form method="POST" action="/movies/{{ $movie->id }}" style="margin-top: 20px">
        @method('PATCH')
        @csrf
        <div class="form-group row">
            <div class="col-8">
                {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                <input id="text" name="title" type="text" class="form-control
                        {{ $errors->has('title') ? 'is-invalid' : '' }}"
                       placeholder="Title" value="{{ $movie->title }}">
                {{-- Validation, we pass to our blade name of our input--}}
                @include('partials.invalid-feedback', ['field' => 'title'])
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                <input id="text" name="genre" type="text" class="form-control
                        {{ $errors->has('genre') ? 'is-invalid' : '' }}"
                       placeholder="Genre" value="{{ $movie->genre }}">
                {{-- Validation, we pass to our blade name of our input--}}
                @include('partials.invalid-feedback', ['field' => 'genre'])
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                <input id="text" name="director" type="text" class="form-control
                        {{ $errors->has('director') ? 'is-invalid' : '' }}"
                       placeholder="Director" value="{{ $movie->director }}">
                {{-- Validation, we pass to our blade name of our input--}}
                @include('partials.invalid-feedback', ['field' => 'director'])
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                <input id="text" name="year" type="number" class="form-control
                        {{ $errors->has('year') ? 'is-invalid' : '' }}"
                       placeholder="Year" value="{{ $movie->year }}">
                {{-- Validation, we pass to our blade name of our input--}}
                @include('partials.invalid-feedback', ['field' => 'year'])
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8">
                    <textarea id="textarea" name="storyline" cols="40" rows="5" class="form-control
                        {{ $errors->has('storyline') ? 'is-invalid' : '' }}" placeholder="Body">{{ $movie->storyline }}</textarea>
                @include('partials.invalid-feedback', ['field' => 'storyline'])
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </div>
    </form>
        <form method="POST" action="/movies/{{ $movie->id }}" >
            @csrf
            @method('DELETE')
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
@endsection