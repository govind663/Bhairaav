<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurTeamRequest extends FormRequest
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
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'description' => 'required|string',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'description' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Name is required'),
            'name.max' => __('The length of name should not exceed 255 characters'),
            'name.string' => __('The name name be a string.'),

            'designation.required' => __('Designation is required'),
            'designation.max' => __('The length of designation should not exceed 255 characters'),
            'designation.string' => __('The designation name be a string.'),

            'description.required' => __('Description is required.'),
            'description.string' => __('The description must be a string.'),
        ];
    }
}
