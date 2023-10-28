<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBiblioteca extends FormRequest
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

            'txtIsbn' => 'required|numeric|min:13',
            'txtTitulo' => 'required|min:5',
            'txtAutor' => 'required',
            'txtPagina' => 'required|numeric|',
            'txtEditorial' => 'required',
            'txtEmail' => 'required|email',
           
        ];
    }
}
