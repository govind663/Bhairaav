<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
                'blog_title' => 'required|string|max:255',
                'blog_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'description' => 'required|string|max:255',
                'categories' => 'required|string|max:255',
                'tags' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'blog_title' => 'required|string|max:255',
                'blog_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'description' => 'required|string|max:255',
                'categories' => 'required|string|max:255',
                'tags' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'blog_title.required' => __('Title is required'),
            'blog_title.max' => __('The length of title should not exceed 255 characters'),
            'blog_title.string' => __('The name title be a string.'),

            'blog_image.required' => __('Blog image is required'),
            'blog_image.mimes' => __('Blog image must be a file of type: jpeg, png, jpg, pdf.'),
            'blog_image.max' => __('The size of blog image should not exceed 2 MB.'),

            'description.required' => __('Description is required'),
            'description.max' => __('The length of description should not exceed 255 characters'),
            'description.string' => __('The description be a string.'),

            'categories.required' => __('Categories is required'),
            'categories.max' => __('The length of categories should not exceed 255 characters'),
            'categories.string' => __('The categories be a string.'),

            'tags.required' => __('Tags is required'),
            'tags.max' => __('The length of tags should not exceed 255 characters'),
            'tags.string' => __('The tags be a string.'),
        ];
    }
}
