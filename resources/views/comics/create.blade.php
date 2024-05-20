@extends('layout.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col" class="mx-3">
            <h3>Inserimento nuovo comic</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
            @php
                $status = 'test';
                $title = '';
                $thumb = '';
                $price = '';
                $series = '';
                $sale_date = '';
                $type = '';
                $artists = '';
                $writers = '';
                $description = '';
                if ($status === 'test') {
                    $title = 'Catwoman Vol. 1: Copycats';
                    $description =
                        'Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.';
                    $thumb =
                        'https://imgs.search.brave.com/bf_FlGnymAgmvweY8YiLAcyy600JdSMl_jHpdR3t5ro/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvNTA5/M2IxOTEtZTkzZS00/NTJjLThhYTQtYTEw/ZDY0ZTcxN2E5LjA5/N2UwZWM5NDgzYzky/OGExMjY4Nzk1Nzk2/NTliZWNjLmpwZWc_/b2RuV2lkdGg9NjEy/Jm9kbkhlaWdodD02/MTImb2RuQmc9ZmZm/ZmZm';
                    $price = '$16.99';
                    $series = 'Catwoman';
                    $sale_date = '2019-04-10';
                    $type = 'graphic novel';
                    $artists = 'Fernando Blanco,Joëlle Jones';
                    $writers = 'Joëlle Jones';
                }
            @endphp
            <form action="{{route('comics.store')}}" method="post">
                {{-- nei form è importante mettere @csrf, importante per la vulnerabilità--}}
            @csrf
            <div class="mb-3 mx-4">
                <label for="title" class="form-label ">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$title}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="thumb" class="form-label ">Immagine</label>
                <input type="text" name="thumb" id="thumb" class="form-control" value="{{$thumb}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="price" class="form-label ">Prezzo</label>
                <input type="text" name="price" id="price" class="form-control" value="{{$price}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="series" class="form-label ">Serie</label>
                <input type="text" name="series" id="series" class="form-control" value="{{$series}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="sale_date" class="form-label ">Data di uscita</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{$sale_date}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="type" class="form-label ">Tipo</label>
                <input type="text" name="type" id="type" class="form-control" value="{{$type}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="artists" class="form-label ">Artisti</label>
                <input type="text" name="artists" id="artists" class="form-control" value="{{$artists}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="writers" class="form-label ">Scrittori</label>
                <input type="text" name="writers" id="writers" class="form-control" value="{{$writers}}">
            </div>
            <div class="mb-3 mx-4">
                <label for="description" class="form-label ">Descrizione</label>
                <textarea name="description" id="description" class="form-control" value="">{{$description}}</textarea>
            </div>
            <button type="submit" class="btn btn-success mb-5 mx-4">Crea</button>
            <button type="reset" class="btn btn-danger mb-5">Cancella</button>
        </form>
    </div>
</div>
</div>


@endsection
