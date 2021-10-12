<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRol extends FormRequest
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
            'nombre'=>'required|max:50|unique:roles,nombre,'. optional($this->route('rol'))->id,
            'slug'=>'required|max:50|unique:roles,slug,'. optional($this->route('rol'))->id
        ];
    }
}
