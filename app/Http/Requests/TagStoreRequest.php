<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//hemos cambiado esto para autorizar la validacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { // y aquí colocamos las diferentes validaciones
        return [
            'name' => 'required', //el campo name es requerido
            'slug' => 'required|unique:tags,slug',//el campo slug tb lo es,
             //tiene que ser único y esto se valida de la tabla tags en el campo slug

        ];
    }
}
