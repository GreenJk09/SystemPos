<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|unique:products|max:250',
            // 'image'=> 'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            'category_id'=>'integer|required',
            'provider_id'=>'integer|required'
        ];
    }
    public function messages(){
        return [
            'name.required'=> 'El nombre es requerido',
            'name.string'=> 'Los valores no son correctos',
            'name.unique'=> 'El Producto ya se encuentra registrado',
            'name.max'=> 'Solo se permiten 250 caracteres',

            // 'image.required'=>'El Campo es requerido',
            // 'image.dimensions'=> 'Solo se permiten imagenes 100x200 px',

            'category_id.integer'=> 'El valor tiene que ser entero',
            'category_id.required'=>'El campo es requerido',

            'provider_id.integer'=>'El valor tiene que ser entero',
            'provider_id.required'=>'El campo es requerido',
        ];
    }
}
