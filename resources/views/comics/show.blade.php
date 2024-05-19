@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ $comic->thumb }}" alt="">
            <h4>{{$comic->title}}</h4>

            <div>

                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning me-2 "><i
                    class="fa-solid fa-pencil"></i></a>

                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </div>

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
