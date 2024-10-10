<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CareerApplyRequest extends FormRequest
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
                'mobile_no' => 'required|numeric',
                'department' => 'required|string|max:255',
                'currentdesignation' => 'required|string|max:255',
                'candidate_resume_doc' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|string|max:255',
                'mobile_no' => 'required|numeric',
                'department' => 'required|string|max:255',
                'currentdesignation' => 'required|string|max:255',
                'candidate_resume_doc' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'g-recaptcha-response' => 'required|captcha',
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

            'mobile_no.required' => __('Mobile Number is required'),
            'mobile_no.numeric' => __('Please enter a valid mobile number'),

            'department.required' => __('Department is required'),
            'department.max' => __('The length of department should not exceed 255 characters'),
            'department.string' => __('The department must be a string.'),

            'currentdesignation.required' => __('Designation is required'),
            'currentdesignation.max' => __('The length of designation should not exceed 255 characters'),
            'currentdesignation.string' => __('The designation must be a string.'),

            'candidate_resume_doc.required' => __('Please upload your resume'),
            'candidate_resume_doc.mimes' => __('Resume must be a file of type: jpeg, png, jpg, pdf.'),
            'candidate_resume_doc.max' => __('The size of Resume should not exceed 2 MB.'),

            'g-recaptcha-response.required' => __('Please verify you are a human.'),
            'g-recaptcha-response.captcha' => __('Captcha verification failed, please try again.'),

        ];
    }
}
