@extends('layout.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h4>{{$comic->title}}</h4>
            <p>DESCRIZIONE: <br>{{$comic->description}}</p>
            <p>SERIES:{{$comic->series}}</p>
            <p>DATA DI VENDITA:{{$comic->sale_date}}</p>
            <p>ATTORI:{{$comic->artists}}</p>
            <p>SCRITTORI:{{$comic->writers}}</p>
        </div>
    </div>
</div>

@endsection
