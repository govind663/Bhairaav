<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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
                'email' => 'required|email|string|max:255',
            ];
        }else{
            $rule = [
                'email' => 'required|email|string|max:255|unique:table,column,except,id',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'email.required' => __('Email Id is required'),
            'email.email' => __('Please enter a valid email id.'),
            'email.max' => __('The length of email id should not exceed 255 characters'),
            'email.string' => __('The email id must be a string.'),
        ];
    }
}
