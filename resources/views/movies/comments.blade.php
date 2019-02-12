<h1>Comments</h1>
@foreach($movie->comments as $comment)
    {{ $comment->content }}
@endforeach

<h2>Create comment</h2>
<form  method="POST" action="{{ route(('movies.comment'), ['id' => $movie->id ]) }}">
    @csrf
    <div class="form-group row">
        <div class="col-8">
                        <textarea id="textarea" name="content" cols="40" rows="5" class="form-control
                            {{ $errors->has('content') ? 'is-invalid' : '' }}" placeholder="Comment">{{ old('content') }}</textarea>
            @include('partials.invalid-feedback', ['field' => 'content'])
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>