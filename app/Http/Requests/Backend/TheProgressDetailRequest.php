<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TheProgressDetailRequest extends FormRequest
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
                'description' => 'required|string',
                'progress_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'description' => 'required|string',
                'progress_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'progress_image.required' => 'The Image field is required',
            'progress_image.max' => 'The Image size should be less than 2mb',
            'progress_image.mimes' => 'The Image should be a file of type: jpeg, png, jpg, pdf',

            'description.required' => 'The description field is required',
            'description.string' => 'The description should be a string',
        ];
    }
}
