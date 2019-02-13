<div class="container" style="text-align: center; margin-top: 30px">
    <h1>Comments</h1>
        <hr>
    @foreach($movie->comments as $comment)
        <div class="card" style="background: lightgreen; border-radius: 30%; width: 30%; margin-left: 380px; font-size: 18px; margin-top: 10px">
            <div class="card-body">
                '' {{ $comment->content }} ''
            </div>
        </div>
    @endforeach

    <h2 style="margin-top: 15px">Create comment</h2>
    <form  method="POST" action="{{ route(('movies.comment'), ['id' => $movie->id ]) }}">
        @csrf
        <div class="form-group row">
            <textarea id="textarea" name="content" cols="40" rows="5" class="form-control" placeholder="Comment" required>{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>