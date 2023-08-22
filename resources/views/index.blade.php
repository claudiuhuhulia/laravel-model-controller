@extends('layouts.main')

@section('main')
    <div class="container">
        <h1>I NOSTRI FILM</h1>
        <div class="row row-cols-2">
            @foreach ($movies as $movie)
                <div class="col">
                    <h3>Titolo: {{ $movie->title }}</h3>
                </div>
            @endforeach

        </div>
    </div>
@endsection
