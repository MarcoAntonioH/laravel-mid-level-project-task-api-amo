<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            
            'proyect_id'=>'required|exist:proyect,id',
            'title'=>'required|string|min:3|max:100',
            'description'=>'nullable|string',
            'status'=> 'required|in:pending,in_progress,done',
            'priority'=>'required|in:low,medium,high',
            'due_date'=>'required|date',
        ];
    }
}
