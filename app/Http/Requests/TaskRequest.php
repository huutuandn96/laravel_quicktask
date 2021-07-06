<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name' => 'required|max:255|unique:tasks,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Task name is required',
            'name.max' => 'Task name must be at least 255 characters',
            'name.unique' => 'This task is already exists',
        ];
    }
}
