<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ContactInformationRequest extends FormRequest
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
                'location' => 'required|string|max:255',
                'location_map_link' => 'required|string',
                'phone' => 'nullable|numeric',
            ];
        }else{
            $rule = [
                'location' => 'required|string|max:255',
                'location_map_link' => 'required|string',
                'phone' => 'nullable|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        [
            'location.required' => 'Location is required.',
            'location.max' => 'The length of Location should not exceed 255 characters.',
            'location.string' => 'The name Location be a string.',

            'location_map_link.required' => 'Location Map Link is required.',
            'location_map_link.string' => 'The name Location Map Link be a string.',

            'phone.required' => 'Mobile Number is required.',
            'phone.numeric' => 'The Mobile Number must be a numeric value.',

        ];
    }
}
