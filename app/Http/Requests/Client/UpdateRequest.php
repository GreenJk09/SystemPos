<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|max:250',
            'dui'=> 'string|required|unique:clients,dui,'.$this->route('client')->id.'|min:10|max:10',
            'nit'=>'string|nullable|unique:clients,nit,'.$this->route('client')->id.'|min:14|max:14',
            'address' => 'string|required|max:250',
            'phone' => 'string|nullable|unique:clients,phone,'.$this->route('client')->id.'|max:8|min:8',
            'email' => 'string|nullable|unique:clients,email,'.$this->route('client')->id.'|email:rfc,dns|max:250',
        ];
    }
    public function messages(){
        return [
            'name.string'=> 'Los valores no son correctos',
            'name.required'=> 'El nombre es requerido',
            'name.max'=> 'Solo se permiten 250 caracteres',

            'dui.string'=>'Los valores no son correctos',
            'dui.required'=>'El DUI es requerido',
            'dui.unique'=>'Ya está registrado',
            'dui.min'=> 'Debe ingresar 10 caracteres',
            'dui.max'=> 'Solo se permiten 10 caracteres',

            'nit.string'=>'Los valores no son correctos',
            'nit.required'=>'El nit es requerido',
            'nit.unique'=>'Ya está registrado',
            'nit.min'=> 'Debe ingresar 10 caracteres',
            'nit.max'=> 'Solo se permiten 14 caracteres',

            'address.string'=>'Los valores no son correctos',
            'address.max'=>'Solo se permiten 250 caracteres',

            'phone.string'=>'Los valores no son correctos',
            'phone.required'=>'El teléfono es requerido',
            'phone.max'=> 'Solo se permiten 8 caracteres',
            'phone.min'=> 'Se requieren 8 caracteres',
            'phone.unique'=>'Ya está registrado',

            'email.string'=>'Los valores no son correctos',
            'email.unique'=>'Ya está registrado',
            'email.max'=> 'Solo se permiten 250 caracteres',
            'email.email'=>'No es un correo electrónico válido',
        ];
    }
}
