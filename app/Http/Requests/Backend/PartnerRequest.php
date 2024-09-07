<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Title is required'),
            'name.max' => __('The length of title should not exceed 255 characters'),
            'name.string' => __('The title be a string.'),
        ];
    }
}
