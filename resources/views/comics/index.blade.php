@extends('layout.main')
@section('content')

<h1>libreria fumetti</h1>

<div class="container">
    <div class="row row-cols-3 ">
        @foreach ($comics as $comic)

        <div class="col">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src={{$comic->thumb}} alt="em;">
                <div class="card-body">
                    <h5 class="card-title">TITOLO:{{$comic->title}}</h5>
                    <p class="card-text">TIPOLOGIA:{{$comic->type}}</p>
                    <p class="card-text">PREZZO:{{$comic->price}}</p>
                    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Dettaglio prodotto</a>

                    {{-- modifica --}}
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning "><i class="fa-solid fa-pencil"></i></a>
                    {{-- cancellazione --}}
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection
