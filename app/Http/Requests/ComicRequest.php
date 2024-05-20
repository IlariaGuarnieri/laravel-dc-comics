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
            'description' => 'required|min:3|max:300',
            'thumb' => 'required|min:3|max:500',
            'price' => 'required|min:3|max:500',
            'series' => 'required|min:3|max:500',
            'sale_date' => 'max:500',
            'type' => 'required|min:3|max:500',
            'artists' => 'min:3|max:500',
            'writers' => 'min:3|max:500',

        ];
    }
    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno 3 caratteri',
            'title.max' => 'Il titolo deve contenere massimo 200 caratteri',
            'description.required'=> 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve contenere almeno 3 caratteri',
            'description.max' => 'La descrizione deve contenere massimo 300 caratteri',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'thumb.min' => 'L\'immagine deve contenere almeno 3 caratteri',
            'thumb.max' => 'L\'immagine deve contenere massimo 500 caratteri',
            'price.required' => 'price è obbligatoria',
            'price.min' => 'price deve contenere almeno 3 caratteri',
            'price.max' => 'price deve contenere massimo 500 caratteri',
            'series.required' => 'series è obbligatoria',
            'series.min' => 'series deve contenere almeno 3 caratteri',
            'series.max' => 'series deve contenere massimo 500 caratteri',
            'sale_date.max'=> 'la data deve contenere massimo 500 caratteri',
            'type.required' => 'type è obbligatorio',
            'type.min' => 'type deve contenere almeno 3 caratteri',
            'type.max' => 'type deve contenere massimo 500 caratteri',
            'artists.required' => 'artists è obbligatorio',
            'artists.min' => 'artists deve contenere almeno 3 caratteri',
            'artists.max' => 'artists deve contenere massimo 500 caratteri',
            'writers.required' => 'writers è obbligatorio',
            'writers.min' => 'writers deve contenere almeno 3 caratteri',
            'writers.max' => 'writers deve contenere massimo 500 caratteri',
        ];
    }
}
