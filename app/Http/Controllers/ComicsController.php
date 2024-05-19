<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // stampo elenco prodotti
        // $comics = Comic::all();
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();
        // istanza senza fillable
        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];
        // $new_comic->artists = $form_data['artists'];
        // $new_comic->writers = $form_data['writers'];
        // $new_comic->save();

        // creo istanza con fillable, riempi tutte le proprietà in automatico in base al fillable
        // gli passo l'istanza $new_comic->fill e gli passo poi l'array $form_data con tutti i dati
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // qui salvo i dati nel $form_data
        $form_data = $request->all();
        // qui aggiorno i dati nel database
        $comic->update($form_data);
        //reindirizzo alla show
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
