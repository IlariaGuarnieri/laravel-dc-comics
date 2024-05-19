@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ $comic->thumb }}" alt="">
            <h4>{{$comic->title}}</h4>
            <p>DESCRIZIONE: <br>{{$comic->description}}</p>
            <p>SERIES:{{$comic->series}}</p>
            <p>DATA DI VENDITA:{{$comic->sale_date}}</p>
            <p>ATTORI:{{$comic->artists}}</p>
            <p>SCRITTORI:{{$comic->writers}}</p>

            @php
                $artists_array = explode(',', $comic['artists']);
                $writers_array = explode(',', $comic['writers']);
            @endphp
            <ul>
                Artisti:
            @foreach ($artists_array as $item)
                <li>{{ $item }}</li>
            @endforeach
            </ul>

            <ul>
                Scrittori:
                @foreach ($writers_array as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
