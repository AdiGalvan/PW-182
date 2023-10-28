<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRegistro extends FormRequest
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
            //Reglas de validacion para form diario
            'txtISBN' => 'required|max:15',
            'txtTitulo' => 'required|min:5',
            'txtAutor' => 'required|min:5',
            'txtPaginas' => 'required|min:5',
            'txtEditorial' => 'required:15',
            'txtEmail_Editorial' => 'required:15',
        ];
    }
}
