<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'modello' => 'required|max:30',
            'prezzo' => 'required|min:3|numeric',
            'alimentazione' => 'required|max:20',
            'anno' => 'required|numeric',
            'numero_telaio' => 'required|max:20|unique:cars',
            'trazione' => 'max:20',
            'porte' => 'required|numeric',
            'carrozzeria' => 'max:20',
            'cavalli' => 'required|numeric',
            'cilindrata' => 'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'modello.required' => 'Il modello è obbligatorio',
            'modello.max' => 'Il modello può essere composto da massimo 30 caratteri',
            'prezzo.required' => 'Il prezzo è obbligatorio',
            'prezzo.min' => 'Il prezzo minimo è di 100 euro',
            'prezzo.numeric' => 'Il prezzo minimo è di 100 euro',
            'alimentazione.required' => 'L\'alimentazione è obbligatoria',
            'alimentazione.max' => 'L\'alimentazione può essere composta da un massimo di 20 caratteri ',
            'anno.required' => 'Inserire l\'anno',
            'anno.numeric' => 'L\'anno deve essere un numero',
            'numero_telaio.required' => 'Inserire il numero di telaio',
            'numero_telaio.max' => 'Il numero di telaio devecontenere al massimo 20 caretteri',
            'numero_telaio.unique' => 'Il numero ditelaio deve essere unico, il seguente numero è già presente',
            'trazione.max' => 'Il tipo di trazione è composto da un massimo di 20  caratteri',
            'porte.numeric' => 'Il numero di porte deve essere un numero',
            'carrozzeria.max' => 'Il tipo di carrozzeria consente un inserimento di massimo 20 caratteri',
            'cavalli.required' => 'Inserire il numerodi cavalli',
            'cavalli.numeric' => 'cavalli deve essere un numero',
            'cilindrata.required' => 'Inserire la cilindrata',
            'cilindrata.numeric' => 'cilindrata deve essere un numero',
        ];
    }
}
