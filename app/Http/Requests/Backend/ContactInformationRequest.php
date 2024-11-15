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
                'location' => 'required|string',
                'location_map_link' => 'required|string',
                'phone' => 'required|numeric',
            ];
        }else{
            $rule = [
                'location' => 'required|string',
                'location_map_link' => 'required|string',
                'phone' => 'required|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'location.required' => __('Location is required'),
            'location.string' => __('Location must be a string'),

            'location_map_link.required' => __('Location Map Link is required'),
            'location_map_link.string' => __('Location Map Link must be a string'),
            'location_map_link.max' => __('The length of Location Map Link should not exceed 255 characters'),

            'phone.required' => __('Mobile Number is required'),
            'phone.numeric' => __('Mobile Number must be a number'),
            'phone.max' => __('The length of Mobile Number should not exceed 255 characters'),
        ];
    }
}
