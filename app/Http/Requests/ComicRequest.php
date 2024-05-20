<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:200',
            'thumb' => 'required|min:3|max:500',
            'price' => 'required|min:3|max:500',
            'series' => 'required|min:3|max:500',
            'sale_date' => 'max:500',
            'type' => 'required|min:3|max:500',
            'artists' => 'max:500',
            'writers' => 'max:500',
            'description' => 'required|min:3|max:300',

        ];
    }
    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo deve contenere massimo :max caratteri',
            'description.required'=> 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve contenere almeno :min caratteri',
            'description.max' => 'La descrizione deve contenere massimo :max caratteri',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'thumb.min' => 'L\'immagine deve contenere almeno 3 caratteri',
            'thumb.max' => 'L\'immagine deve contenere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatoria',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo deve contenere massimo :max caratteri',
            'series.required' => 'Serie è obbligatoria',
            'series.min' => 'Serie deve contenere almeno 3 caratteri',
            'series.max' => 'Serie deve contenere massimo :max caratteri',
            'sale_date.max'=> 'La data deve contenere massimo :max caratteri',
            'type.required' => 'La tipologia è obbligatorio',
            'type.min' => 'La tipologia deve contenere almeno 3 caratteri',
            'type.max' => 'La tipologia deve contenere massimo :max caratteri',
            'artists.max' => 'Gli artisti devono contenere massimo :max caratteri',
            'writers.max' => 'Scrittori deve contenere :max 500 caratteri',
        ];
    }
}
