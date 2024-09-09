<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LegacyOfExcellenceRequest extends FormRequest
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
                'title' => 'required|string|max:555',
                'description' => 'required|string',
                'image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:555',
                'description' => 'required|string',
                'image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'title.required' => __('Title is required'),
            'title.max' => __('The length of title should not exceed 255 characters'),
            'title.string' => __('The name title be a string.'),

            'description.required' => __('Description is required'),
            'description.string' => __('The description must be a string.'),

            'image.required' => __('Image is required'),
            'image.mimes' => __('Image must be a file of type: jpeg, png, jpg, pdf.'),
            'image.max' => __('The size of image should not exceed 2 MB.'),
        ];
    }
}
