<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LatestUpdateRequest extends FormRequest
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
                'media_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'media_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Title is required'),
            'name.max' => __('The length of title should not exceed 255 characters'),
            'name.string' => __('The name title be a string.'),

            'media_image.required' => __('Media Image is required'),
            'media_image.mimes' => __('Media Image must be a file of type: jpeg, png, jpg, pdf.'),
            'media_image.max' => __('The size of media image should not exceed 2 MB.'),
        ];
    }
}
