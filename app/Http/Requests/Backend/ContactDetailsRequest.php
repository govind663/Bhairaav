<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ContactDetailsRequest extends FormRequest
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
                'email' => 'required|string|email|max:255',
                'phone' => 'nullable|numeric',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'nullable|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'title.required' => __('Title is required'),
            'title.max' => __('The length of Title should not exceed 255 characters'),
            'title.string' => __('The name Title be a string.'),

            'email.required' => __('Email is required'),
            'email.email' => __('Email must be a valid email address'),
            'email.max' => __('The length of Email should not exceed 255 characters'),
            'email.string' => __('The name Email be a string.'),

            'phone.required' => __('Mobile Number is required'),
            'phone.numeric' => __('Mobile Number must be a number'),
            'phone.max' => __('The length of Mobile Number should not exceed 255 characters'),
        ];
    }
}
