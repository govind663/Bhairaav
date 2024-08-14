<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                'category_name' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'category_name' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'category_name.required' => __('Category Name is required'),
            'category_name.max' => __('The length of category name should not exceed 255 characters'),
            'category_name.string' => __('The name category name be a string.'),
        ];
    }
}
