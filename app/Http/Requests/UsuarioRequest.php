<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
            'telefone' => 'required|numeric'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'nome.required' => 'Digite um nome',
    //         'cpf.required'  => 'Digite um CPF',
    //         'email.required'  => 'Digite um Email',
    //         'telefone.required'  => 'Digite um Telefone'
    //     ];
    // }
}
