
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @foreach($movies as $movie)
                    <li class="nav-item">
                        <a class="nav-link active" href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>