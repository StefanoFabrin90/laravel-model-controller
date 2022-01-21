@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Movie</h1>
        <section>
            @foreach($movies as $movie)
                <h4>{{ $movie->title }}</h4>
                <ul>
                    <li>{{ $movie->original_title }}</li>
                    <li>{{ $movie->nationality }}</li>
                    <li>{{ $movie->date }}</li>
                    <li>{{ $movie->vote }}</li>
                </ul>
    
                @if(!$loop->last)
                    <hr>
                @endif
    
            @endforeach
        </section>
    </div>
@endsection