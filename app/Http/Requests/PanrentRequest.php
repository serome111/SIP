<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PanrentRequest extends FormRequest
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
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required|max:10',
            'fixedphone' => 'required',
            'cardid' => 'required',
            'parent' => 'required',
            'gender' => 'required',
            'cardtype_id' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Escriba un nombre para el cuidador',
            'lastname.required' => 'Escriba por lo menos un apellido del cuidador',
            'email.required' => 'Escriba el correo del cuidador',
            // 'phone.max' => 'Escriba un numero valido',
            'phone.required' => 'Escriba el telefono del cuidador',
            'cardid.required' => 'Escriba el documento de identificacion del cuidador',
            'parent.required' => 'Escriba el parentesco',
            'gender.required' => 'Seleccione un genero',
            'cardtype_id.required' => 'Seleccione un tipo de documento',
        ];
    }
}
