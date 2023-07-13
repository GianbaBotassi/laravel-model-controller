@extends('layouts.layout')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h4 class="text-center">{{ $movie->title }}</h4>
                <h6 class="text-center">{{ $movie->title }}</h6>
                <div>
                    <span class="d-inline">Anno: {{ $movie->date }}</span>
                    <span>Voto: {{ $movie->vote }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
