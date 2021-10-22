<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPost extends FormRequest
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
            'usuarios_id' => 'required|integer',
            'titulo' => 'required|max:150',
            'slug' => 'required|max:150|unique:posts,slug,'.$this->route('id'),
            'contenido' => 'required',
            'descripcion' => 'required|max:255',
            'categoria' => 'required|array',
            'tag' => 'nullable|array',
            'imagen'=> 'nullable|image|max:1024|dimensions:max_width=2000,max_heigth=2000'
        ];
    }

    public function messages()
    {
        return [
            'slug.unique' => 'No se puede tener dos post con la misma URL',
        ];
    }
}
