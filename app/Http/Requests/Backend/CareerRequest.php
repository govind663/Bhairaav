<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
                'career_title' => 'required|string|max:255',
                'career_description' => 'required|string',
                'career_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'job_title.*' => 'required|string',
                'job_description.*' => 'required|string',
            ];
        }else{
            $rule = [
                'career_title' => 'required|string|max:255',
                'career_description' => 'required|string',
                'career_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'job_title.*' => 'required|string',
                'job_description.*' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'career_title.required' => __('Career Title is required'),
            'career_title.max' => __('The length of Career Title should not exceed 255 characters'),
            'career_title.string' => __('The name Career Title be a string.'),

            'career_description.required' => __('Career Description is required'),
            'career_description.string' => __('The description must be a string.'),

            'career_image.required' => __('Career Image is required'),
            'career_image.mimes' => __('The image must be a file of type: jpeg, png, jpg, pdf.'),
            'career_image.max' => __('The image size should not exceed 2048 kilobytes.'),

            'job_title.*.required' => __('Job Title is required'),
            'job_title.*.max' => __('The length of Job Title should not exceed 255 characters'),

            'job_description.*.required' => __('Job Description is required'),
            'job_description.*.max' => __('The length of Job Description should not exceed 255 characters'),
        ];
    }
}
