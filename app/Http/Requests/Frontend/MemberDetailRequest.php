<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class MemberDetailRequest extends FormRequest
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
                'f_name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'mobile_no' => 'required|numeric|',
                'email' => 'required|email|string|max:255|unique:member_details,email',
                'project' => 'required',
                'unit_or_flat' => 'required|string|max:255',
                'refer_f_name.*' => 'required|string|max:255',
                'refer_l_name.*' => 'required|string|max:255',
                'refer_email.*' => 'required|email|unique:member_details,email',
                'refer_relation.*' => 'required|string|max:255',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }else{
            $rule = [
                'f_name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'mobile_no' => 'required|numeric|',
                'email' => 'required|email|string|max:255|unique:member_details,email',
                'project' => 'required',
                'unit_or_flat' => 'required|string|max:255',
                'refer_f_name.*' => 'required|string|max:255',
                'refer_l_name.*' => 'required|string|max:255',
                'refer_email.*' => 'required|email|unique:member_details,email',
                'refer_relation.*' => 'required|string|max:255',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'f_name.required' => 'First Name is required.',
            'f_name.string' => 'First Name must be a string.',
            'f_name.max' => 'First Name may not be greater than 255 characters.',

            'l_name.required' => 'Last Name is required.',
            'l_name.string' => 'Last Name must be a string.',
            'l_name.max' => 'Last Name may not be greater than 255 characters.',

            'mobile_no.required' => 'Mobile No is required.',
            'mobile_no.numeric' => 'Mobile No must be a number.',

            'email.required' => 'Email is required.',
            'mobile_no.max' => 'Mobile No may not be greater than 255 characters.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email has already been taken.',

            'project.required' => 'Project is required.',
            'project.numeric' => 'Project must be a number.',

            'unit_or_flat.required' => 'Unit / Flat is required.',
            'unit_or_flat.string' => 'Unit / Flat must be a string.',
            'unit_or_flat.max' => 'Unit / Flat may not be greater than 255 characters.',

            'refer_f_name.*.required' => 'First Name is required.',
            'refer_f_name.*.string' => 'First Name must be a string.',
            'refer_f_name.*.max' => 'First Name may not be greater than 255 characters.',

            'refer_l_name.*.required' => 'Last Name is required.',
            'refer_l_name.*.string' => 'Last Name must be a string.',
            'refer_l_name.*.max' => 'Last Name may not be greater than 255 characters.',

            'refer_email.*.required' => 'Email is required.',
            'refer_email.*.email' => 'Email must be a valid email address.',
            'refer_email.*.unique' => 'Email has already been taken.',

            'refer_relation.*.required' => 'Relation is required.',
            'refer_relation.*.string' => 'Relation must be a string.',
            'refer_relation.*.max' => 'Relation may not be greater than 255 characters.',

            'g-recaptcha-response.required' => __('Please verify you are a human.'),
            'g-recaptcha-response.captcha' => __('Captcha verification failed, please try again.'),
        ];
    }
}
