<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObraRequest extends FormRequest
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
            'nome'=> 'required',
            'nome_outro'=> 'required',
            'data'=> 'required',
            'tipo'=> 'required',
            'tamanho'=> 'required',
            'artista'=> 'required',
            'local'=> 'required',
        ];
    }
}
