<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest extends FormRequest
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
                'project_name' => 'required|string|max:255',
                'address' => 'required|string',
                'configuration' => 'nullable|string',
                'image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'mobile_no' => 'nullable',
                'project_type' =>'required|numeric',
                'property_type' =>'required|numeric',
            ];
        }else{
            $rule = [
                'project_name' => 'required|string|max:255',
                'address' => 'required|string',
                'configuration' => 'nullable|string',
                'image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'mobile_no' => 'nullable',
                'project_type' =>'required|numeric',
                'property_type' =>'nullable|numeric',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'project_name.required' => __('Project Name is required'),
            'project_name.max' => __('The length of project name should not exceed 255 characters'),
            'project_name.string' => __('The project name must be a string.'),

            'address.required' => __('Address is required'),
            'address.string' => __('The address must be a string.'),

            'configuration.required' => __('Configuration is required'),
            'configuration.string' => __('The configuration must be a string.'),

            'image.required' => __('Project Image  is required'),
            'image.mimes' => __('Image must be a file of type: jpeg, png, jpg, pdf.'),
            'image.max' => __('The size of image should not exceed 2 MB.'),

            'mobile_no.required' => __('Mobile No is required'),
            'mobile_no.numeric' => __('The mobile no must be a number.'),
            'mobile_no.digits_between' => __('The mobile no must be between 10 and 13 digits long.'),

            'project_type.required' => __('Project Type is required'),
            'project_type.numeric' => __('The project type must be a number.'),

            'property_type.required' => __('Property Type is required'),
            'property_type.numeric' => __('The Property Type must be a number.'),
        ];
    }
}
