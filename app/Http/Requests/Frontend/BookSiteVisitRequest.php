<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class BookSiteVisitRequest extends FormRequest
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
                'projects_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255',
                'phone' => 'required|numeric',
                'visiting_date' => 'required',
                'visiting_time' => 'required',
            ];
        }else{
            $rule = [
                'projects_id' => 'required|numeric',
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255',
                'phone' => 'required|numeric',
                'visiting_date' => 'required',
                'visiting_time' => 'required',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'projects_id.required' => __('Project Id is required'),
            'projects_id.numeric' => __('Please enter a valid project id.'),

            'name.required' => __('Name is required'),
            'name.max' => __('The length of name should not exceed 255 characters'),
            'name.string' => __('The name must be a string.'),

            'email.required' => __('Email Id is required'),
            'email.email' => __('Please enter a valid email id.'),
            'email.max' => __('The length of email id should not exceed 255 characters'),
            'email.string' => __('The email id must be a string.'),

            'phone.required' => __('Phone no. is required'),
            'phone.numeric' => __('Please enter a valid phone no..'),

            'visiting_date.required' => __('Date is required'),

            'visiting_time.required' => __('Time is required'),
        ];
    }
}
