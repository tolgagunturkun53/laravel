<p>Film Listesi</p>

@foreach($movies as $movie)
<h1><a href="{{ url('movie/'.$movie->id) }}">{{ $movie->name }}</a></h1>
<p>IMDB: {{ $movie->imdb }}</p>
<hr>
@endforeach