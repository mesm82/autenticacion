<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginFormRequest extends FormRequest
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
            'rut'=>'required',
            'clave'=>'required'
        ];
    }
        public function messages()
        {
            return [
                'rut.required' => 'El Rut es obligatorio.',
                'clave.required' => 'La Clave es obligatoria'
            ];
        }
}
