<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
                'subtitle' => 'required|string|max:255',
                'banner_imag' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'banner_imag' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
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

            'subtitle.required' => __('Subtitle is required'),
            'subtitle.max' => __('The length of subtitle should not exceed 255 characters'),
            'subtitle.string' => __('The subtitle must be a string.'),

            'banner_imag.required' => __('Banner image is required'),
            'banner_imag.mimes' => __('Banner image must be a file of type: jpeg, png, jpg, pdf.'),
            'banner_imag.max' => __('The size of banner image should not exceed 2 MB.'),
        ];
    }
}
