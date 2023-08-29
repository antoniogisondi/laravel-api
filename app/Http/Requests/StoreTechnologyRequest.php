<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'technology_name' => 'required|max:20'
        ];
    }

    public function messages(){
          return[
            'technology_name.required' => 'Il nome è obbligatorio',
            'technology_name.max' => 'Il nome deve essre di massimo :max caratteri'
          ];  
    }
}
