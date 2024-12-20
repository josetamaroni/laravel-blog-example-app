<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Verifica si la petición está autorizada para realizar la petición y sigue con las rules
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Validar campos de acuerdo al método de la petición
        // if($this->isMethod('PATCH')){
        //     return [
        //         'title' => ['required','min:4'],
        //     ];
        // }

        return [
            'title' => ['required','min:4'],
            'body' => ['required']
        ];
    }
}
