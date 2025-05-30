<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|min:3|max:100|unique:proyect,name',
            'description'=>'nullable|string',
            'status'=> 'required|in:active,inactive',
        ];
    }


    public function message():array
    {
        return[
            'name.required'=> 'El nombre es obligatorio',
            'name.unique'=> 'Ya existe un proyecto con el mismo nombre',
            'status.in'=>'El estado debe ser active o inactive',

        ];
    }
}
