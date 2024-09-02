<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProjectDetailsRequest extends FormRequest
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
                'project_type_id' => 'required|numeric',
                'project_name_id' => 'required|numeric',
                'banner_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'maha_rera_registration_number' => 'required|string|max:255',
                'project_link' => 'required|string|max:255',
                'overview_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'project_description' => 'required|string',

                // ==== Hallmarks
                'hallmarks' => 'required|array|min:1',
                'hallmarks.*' => 'required|string|min:2|max:255',
            ];
        }else{
            $rule = [
                'project_type_id' => 'required|numeric',
                'project_name_id' => 'required|numeric',
                'banner_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'maha_rera_registration_number' => 'required|string|max:255',
                'project_link' => 'required|string|max:255',
                'overview_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'project_description' => 'required|string',

                // ===== Hallmarks
                'hallmarks' => 'required|array|min:1',
                'hallmarks.*' => 'required|string|min:2|max:255',

            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'project_type_id.required' => 'The Project Type is required',
            'project_type_id.numeric' => 'The Project Type must be a number',

            'project_name_id.required' => 'The Project Name is required',
            'project_name_id.numeric' => 'The Project Name must be a number',

            'banner_image.required' => 'The Projet Banner Image is required',
            'banner_image.max' => 'The Projet Banner Image size should be less than 2mb',
            'banner_image.mimes' => 'The Projet Banner Image should be a file of type: jpeg, png, jpg, pdf',

            'maha_rera_registration_number.required' => 'The Maha RERA Registration Number is required',
            'maha_rera_registration_number.string' => 'The Maha RERA Registration Number should be a string',
            'maha_rera_registration_number.max' => 'The Maha RERA Registration Number should not exceed 255 characters',

            'project_link.required' => 'The Project Link is required',
            'project_link.string' => 'The Project Link should be a string',
            'project_link.max' => 'The Project Link should not exceed 255 characters',

            'overview_image.required' => 'The Project Overview Image is required',
            'overview_image.max' => 'The Project Overview Image size should be less than 2mb',
            'overview_image.mimes' => 'The Project Overview Image should be a file of type: jpeg, png, jpg, pdf',

            'project_description.required' => 'The Project Description is required',
            'project_description.string' => 'The Project Description should be a string',

            'hallmarks.required' => 'At least one Hallmark is required',
            'hallmarks.*.required' => 'Each Hallmark should be filled',
            'hallmarks.*.string' => 'Each Hallmark should be a string',
            'hallmarks.*.min' => 'Each Hallmark should have at least 2 characters',
            'hallmarks.*.max' => 'Each Hallmark should not exceed 255 characters'
        ];
    }
}
