<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LocationAdvantageRequest extends FormRequest
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
                'feature_name' =>'required|string|max:255',
            ];
        }else{
            $rule = [
                'feature_name' =>'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'feature_name.required' => __('Feature name is required'),
            'feature_name.max' => __('The length of feature name should not exceed 255 characters'),
            'feature_name.string' => __('The name feature name be a string.'),
        ];
    }
}
