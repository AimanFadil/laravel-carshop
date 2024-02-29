<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'prezzo' => 'required|min:3',
            'alimentazione' => 'required|max:20',
            'anno' => 'required',
            'numero_telaio' => 'required|max:20',
            'trazione' => 'max:20',
            'carrozzeria' => 'max:20',
            'cavalli' => 'required',
            'cilindrata' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'modello.required' => 'Il modello è obbligatorio',
            'modello.max' => 'Il modello può essere composto da massimo 30 caratteri',
            'prezzo.required' => 'Il prezzo è obbligatorio',
            'prezzo.min' => 'Il prezzo minimo è di 100 euro',
            'alimentazione.required' => 'L\'alimentazione è obbligatoria',
            'alimentazione.max' => 'L\'alimentazione può essere composta da un massimo di 20 caratteri ',
            'anno.required' => 'Inserire l\'anno',
            'numero_telaio.required' => 'Inserire il numero di telaio',
            'numero_telaio.max' => 'Il numero di telaio devecontenere al massimo 20 caretteri',
            'trazione.max' => 'Il tipo di trazione è composto da un massimo di 20  caratteri',
            'carrozzeria.max' => 'Il tipo di carrozzeria consente un inserimento di massimo 20 caratteri',
            'cavalli.required' => 'Inserire il numerodi cavalli',
            'cilindrata.required' => 'Inserire la cilindrata',
        ];
    }
}
