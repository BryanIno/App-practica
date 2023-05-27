<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class UsuarioFormulario extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'correo'=>'required',
            'contraseña'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Ingresar el :attribute es obligatorio',
            'correo.required'=>'Ingresar el :attribute es obligatorio',
            'contraseña.required'=>'Ingresar la :attribute es obligatorio'
        ];
    }
}
