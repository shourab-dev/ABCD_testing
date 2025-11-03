<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'title' => 'required|min:3',
            'detail' => 'required',
            'deadline' => 'nullable|after_or_equal:today'
        ];
    }


    function messages()
    {
        return  [
            'title.required' => 'Title lagbe!',
            'title.min' => 'Title min 3 char!'
        ];
    }
}
