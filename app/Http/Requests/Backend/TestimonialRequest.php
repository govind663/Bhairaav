<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
                'description' => 'required|string',
                'profile_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'star_count' => 'required|numeric|max:10|min:1',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'profile_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'star_count' => 'required|numeric|max:10|min:1',
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

            'description.required' => __('Description is required'),
            'description.string' => __('The description must be a string.'),

            'profile_image.required' => __('Profile Image is required'),
            'profile_image.mimes' => __('Image must be a file of type: jpeg, png, jpg, pdf.'),
            'profile_image.max' => __('The size of image should not exceed 2 MB.'),

            'star_count.required' => __('Star count is required'),
            'star_count.numeric' => __('Star count must be a number'),
            'star_count.max' => __('Star count should not exceed 10'),
            'star_count.min' => __('Star count should be at least 1'),
        ];
    }
}
