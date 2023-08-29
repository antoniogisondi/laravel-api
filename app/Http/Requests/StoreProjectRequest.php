<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'titolo'            => 'required|max:50',
            'descrizione'       => 'required|max:255',
            'inizio_progetto'   => 'required|date_format:Y-m-d',
            'consegna_progetto' => 'required|date_format:Y-m-d',
            'img'               => 'image|max:250',
            'type_id'           => 'required|exists:types,id',
            'technology_id'     => 'exists:technologies,id',
        ];
    }

    public function messages(){
        return [
            'titolo.required'               => 'Il campo del titolo deve essere compilato',
            'titolo.max'                    => 'Il campo del titolo deve contenere al massimo :max caratteri',
            'descrizione.required'          => 'Il campo della descrizione deve essere compilato',
            'descrizione.max'               => 'Il campo della descrizione deve contenere al massimo :max caratteri',
            'inizio_progetto.required'      => 'Il campo dell\' inizio del progetto deve essere compilato',
            'inizio_progetto.date_format'   => 'Il formato della data deve essere nell\' ordine anno-mese-giorno',
            'consegna_progetto.required'    => 'Il campo dell\' inizio del progetto deve essere compilato',
            'consegna_progetto.date_format' => 'Il formato della data deve essere nell\' ordine anno-mese-giorno',
            'img.image'                     => 'Il formato dell\' immagine dev\'essere di tipo jpg, jpeg, webp, png',
            'img|max'                       => 'L\' immagine deve essere lunga al massimo :max caratteri',
            'type_id.required'              => 'Selezionare una tipologia di progetto',
            'type_id.exists'                => 'La tipologia selezionata non è esistente',
            'technology_id.exists'          => 'Tecnologia selezionata non valida'
        ];
    }
}
