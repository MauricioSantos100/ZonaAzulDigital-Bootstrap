<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstacionamentoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'cnpj' => 'required|numeric',
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required|numeric',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'numero' => 'required|numeric',
        ];
    }
}

