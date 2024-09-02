<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LoyalityProgramRequest extends FormRequest
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
        if ($this->id){
            $rule = [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'title.required' => 'The Title is required',
            'title.string' => 'The Title should be a string',
            'title.max' => 'The Title should not be more than 255 characters',

            'description.required' => 'The Description is required',
            'description.string' => 'The Description should be a string',
        ];
    }
}
