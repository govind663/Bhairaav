<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
                'email' => 'required|email|string|max:255',
                'phone_no' => 'required|numeric',
                'subject' => 'required|string|max:255',
                'message' => 'nullable|max:600',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255',
                'phone_no' => 'required|numeric',
                'subject' => 'required|string|max:255',
                'message' => 'nullable|max:600',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Name is required'),
            'name.max' => __('The length of name should not exceed 255 characters'),
            'name.string' => __('The name must be a string.'),

            'email.required' => __('Email Id is required'),
            'email.email' => __('Please enter a valid email id.'),
            'email.max' => __('The length of email id should not exceed 255 characters'),
            'email.string' => __('The email id must be a string.'),

            'phone_no.required' => __('Phone no. is required'),
            'phone_no.numeric' => __('Please enter a valid phone no..'),

            'subject.required' => __('Subject is required'),
            'subject.max' => __('The length of subject should not exceed 255 characters'),
            'subject.string' => __('The subject must be a string.'),

            'message.max' => __('The length of message should not exceed 600 characters'),
            'message.string' => __('The message must be a string.'),
        ];
    }
}
