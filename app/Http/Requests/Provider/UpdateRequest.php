<?php

namespace App\Http\Requests\Provider;

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
            'name'=>'required|string|max:50',

            'email' => 'required|email|string|unique:providers,email, '.$this->route('provider')->id.'|max:250',

            'nit'=>'required|string|min:14|unique:providers,nit, '.$this->route('provider')->id.'|max:14',
            
            'address' => 'nullable|string|max:250',

            'phone' => 'required|string|min:8|unique:providers,phone,'.$this->route('provider')->id.'|max:8'
        ];
    }
    public function messages(){
        return [
            'name.required'=> 'El nombre es requerido',
            'name.string'=> 'Los valores no son correctos',
            'name.max'=> 'Solo se permiten 250 caracteres',

            'email.required'=>'El email es requerido',
            'email.email'=>'No es un correo electrónico válido',
            'email.string'=>'Los valores no son correctos',
            'email.max'=> 'Solo se permiten 250 caracteres',
            'email.unique'=>'Ya está registrado',

            'nit.required'=>'El nit es requerido',
            'nit.string'=>'Los valores no son correctos',
            'nit.max'=> 'Solo se permiten 14 caracteres',
            'nit.min'=> 'Se requieren 14 caracteres',
            'nit.unique'=>'Ya está registrado',

            'address.max'=>'Solo se permiten 250 caracteres',
            'address.string'=>'Los valores no son correctos',

            'phone.required'=>'El teléfono es requerido',
            'phone.string'=>'Los valores no son correctos',
            'phone.max'=> 'Solo se permiten 8 caracteres',
            'phone.min'=> 'Se requieren 8 caracteres',
            'phone.unique'=>'Ya está registrado'
        ];
    }
}
