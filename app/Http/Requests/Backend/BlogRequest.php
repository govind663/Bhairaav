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
                'description' => 'required|string',
                'category_id' => 'required|numeric',
                'tags' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'blog_title' => 'required|string|max:255',
                'blog_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'description' => 'required|string',
                'category_id' => 'required|numeric|max:255',
                'tags' => 'required|string|max:255',
            ];
        }
        // dd($rule);
        return $rule;
    }

    public function messages()
    {
        return [
            'blog_title.required' => __('Title is required'),
            'blog_title.max' => __('The length of title should not exceed 255 characters'),
            'blog_title.string' => __('The name title be a string.'),

            'blog_image.required' => __('Blog post is required'),
            'blog_image.mimes' => __('Blog post must be a file of type: jpeg, png, jpg, pdf.'),
            'blog_image.max' => __('The size of blog post should not exceed 2 MB.'),

            'description.required' => __('Description is required'),
            'description.min' => __('The length of description must be 3 characters'),
            'description.string' => __('The description be a string.'),

            'category_id.required' => __('Categories is required'),
            'category_id.numeric' => __('The categories be a number.'),

            'tags.required' => __('Popular Tags is required'),
            'tags.max' => __('The length of popular tags should not exceed 255 characters'),
            'tags.string' => __('The popular tags be a string.'),
        ];
    }
}
