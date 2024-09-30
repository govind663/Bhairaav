<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PrivacyPolicyRequest extends FormRequest
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
                'introduction' => 'required|string',
                'data_collection.*' => 'required',
                'use_of_information.*' => 'required',
                'closure_of_information.*' => 'required',
                'data_storage.*' => 'required',
                'cookies' => 'required|string',
                'rights.*' => 'required',
                'changing_privacy_policy' => 'required|string',
            ];
        }else{
            $rule = [
                'introduction' => 'required|string',
                'data_collection.*' => 'required',
                'use_of_information.*' => 'required',
                'closure_of_information.*' => 'required',
                'data_storage.*' => 'required',
                'cookies' => 'required|string',
                'rights.*' => 'required',
                'changing_privacy_policy' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'introduction.required' => __('Introduction is required.'),
            'introduction.string' => __('The Introduction must be a string.'),

            'data_collection.*.required' => __('Data Collection is required.'),
            'data_collection.*.string' => __('The Data Collection must be a string.'),

            'use_of_information.*.required' => __('Use of Information is required.'),
            'use_of_information.*.string' => __('The Use of Information must be a string.'),

            'closure_of_information.*.required' => __('Closure of Information is required.'),
            'closure_of_information.*.string' => __('The Closure of Information must be a string.'),

            'data_storage.*.required' => __('Data Storage is required.'),
            'data_storage.*.string' => __('The Data Storage must be a string.'),

            'cookies.required' => __('Cookies is required.'),
            'cookies.string' => __('The Cookies must be a string.'),

            'rights.*.required' => __('Rights is required.'),
            'rights.*.string' => __('The Rights must be a string.'),

            'changing_privacy_policy.required' => __('Changes is required.'),
            'changing_privacy_policy.string' => __('The Changes must be a string.'),
        ];
    }
}
