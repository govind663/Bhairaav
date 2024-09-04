<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
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
                'media_name' => 'required|string|max:255',
                'media_dec' => 'nullable|string',
                'media_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'media_name' => 'required|string|max:255',
                'media_dec' => 'nullable|string',
                'media_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'media_name.required' => __('Title is required'),
            'media_name.max' => __('The length of category name should not exceed 255 characters'),
            'media_name.string' => __('The name category name be a string.'),

            'media_dec.required' => __('Description is required'),
            'media_dec.string' => __('The description must be a string.'),

            'media_image.required' => __('Image is required'),
            'media_image.mimes' => __('Image must be a file of type: jpeg, png, jpg, pdf.'),
            'media_image.max' => __('The size of image should not exceed 2 MB.'),
        ];
    }
}
