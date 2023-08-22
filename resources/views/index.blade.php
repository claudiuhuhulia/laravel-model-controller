@extends('layouts.main')

@section('main')
    <div class="container">
        <h1>I NOSTRI FILM</h1>
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="col g-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}
                            </h6>
                            <ul>
                                <li>Nazionalità: {{ $movie->nationality }}</li>
                                <li>Data d'uscita: {{ $movie->date }}</li>
                                <li>Voto: {{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
