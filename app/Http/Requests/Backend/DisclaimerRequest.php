<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class DisclaimerRequest extends FormRequest
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
                'description' => 'required|string',
            ];
        }else{
            $rule = [
                'description' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'description.required' => __('Description is required.'),
            'description.string' => __('The description must be a string.'),
        ];
    }
}
