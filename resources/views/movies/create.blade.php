@extends('layers.master')

@section('title', 'Add movie')

@section('content')
    <div class="container">
        <h1 class="pb-3 mb-4 font-italic border-bottom" style="text-align: center">Create movie</h1>
        <form method="POST" action="/movies">
            @csrf
            <div class="form-group row">
                <div class="col-8">
                    {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                    <input id="text" name="title" type="text" class="form-control
                        {{ $errors->has('title') ? 'is-invalid' : '' }}"
                           placeholder="Title" value="{{ old('title') }}">
                    {{-- Validation, we pass to our blade name of our input--}}
                    @include('partials.invalid-feedback', ['field' => 'title'])
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    {{-- Simpler way if you just need your input to be required --}}
                    <input type="text" name="genre" class="form-control" placeholder="Genre" required value="{{ old('genre') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    {{-- Simpler way if you just need your input to be required, by not so safe --}}
                    <input type="text" name="director" class="form-control" placeholder="Director" required value="{{ old('director') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    {{-- is-invalid is imporatnt, it will connect with invalid-feedback from blade --}}
                    <input id="text" name="year" type="number" class="form-control
                        {{ $errors->has('year') ? 'is-invalid' : '' }}"
                           placeholder="Year" value="{{ old('year') }}">
                     {{--Validation, we pass to our blade name of our input--}}
                    @include('partials.invalid-feedback', ['field' => 'year'])
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <textarea id="textarea" name="storyline" cols="40" rows="5" class="form-control
                        {{ $errors->has('storyline') ? 'is-invalid' : '' }}" placeholder="Body">{{ old('storyline') }}</textarea>
                    @include('partials.invalid-feedback', ['field' => 'storyline'])
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-primary">Go back</a>
                </div>
            </div>
        </form>
    </div>
@endsection