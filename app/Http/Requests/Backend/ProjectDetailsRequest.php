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
                // ==== Project Details
                'project_type_id' => 'required|numeric',
                'project_name_id' => 'required|numeric',
                'banner_image' => 'array',
                'banner_image.*' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'maha_rera_registration_number' => 'required|string|max:255',
                'project_link' => 'required|string|max:255',

                // ==== Project Overview Details
                'overview_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'project_description' => 'required|string',

                // ==== Hallmarks
                'hallmarks' => 'required|array|min:1',
                'hallmarks.*' => 'required|string|min:2|max:255',

                // ==== Location Advantages
                'location_advantages_title' => 'required|string|max:255',
                'location_advantage_id' => 'required|array|min:1',
                'location_advantage_id.*' => 'required|string|min:2|max:255',
                'feature_value' => 'required|array|min:1',
                'feature_value.*' => 'required|string|min:2|max:255',

                // ==== Amenities & Features
                'amenities_title' => 'required|string|max:255',
                'amenite_image' => 'required|array',
                'amenite_image.*' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'amenite_image_name' => 'required|array|min:1',
                'amenite_image_name.*' => 'required|string|min:2|max:255',

                // ==== Gallery
                'gallery_title' => 'required|string|max:255',
                'gallery_image' => 'required|array',
                'gallery_image.*' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'gallery_image_name' => 'required|array|min:1',
                'gallery_image_name.*' => 'required|string|min:2|max:255',
            ];
        }else{
            $rule = [
                // ==== Project Details
                'project_type_id' => 'required|numeric',
                'project_name_id' => 'required|numeric',
                'banner_image' => 'required|array',
                'banner_image.*' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'maha_rera_registration_number' => 'required|string|max:255',
                'project_link' => 'required|string|max:255',

                // ==== Project Overview Details
                'overview_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'project_description' => 'required|string',

                // ==== Hallmarks
                'hallmarks' => 'required|array|min:1',
                'hallmarks.*' => 'required|string|min:2|max:255',

                // ==== Location Advantages
                'location_advantages_title' => 'required|string|max:255',
                'location_advantage_id' => 'required|array|min:1',
                'location_advantage_id.*' => 'required|string|min:2|max:255',
                'feature_value' => 'required|array|min:1',
                'feature_value.*' => 'required|string|min:2|max:255',

                // ==== Amenities & Features
                'amenities_title' => 'required|string|max:255',
                'amenite_image' => 'required|array',
                'amenite_image.*' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'amenite_image_name' => 'required|array|min:1',
                'amenite_image_name.*' => 'required|string|min:2|max:255',

                // ==== Gallery
                'gallery_title' => 'required|string|max:255',
                'gallery_image' => 'required|array',
                'gallery_image.*' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'gallery_image_name' => 'required|array|min:1',
                'gallery_image_name.*' => 'required|string|min:2|max:255',
            ];
        }
        return $rule;
    }

    public function messages(){
        return [

            // ==== Project Details
            'project_type_id.required' => 'The Project Type is required',
            'project_type_id.numeric' => 'The Project Type must be a number',

            'project_name_id.required' => 'The Project Name is required',
            'project_name_id.numeric' => 'The Project Name must be a number',

            'banner_image.required' => 'The Projet Banner Image is required',
            'banner_image.max' => 'The Projet Banner Image size should be less than 2mb',
            'banner_image.mimes' => 'The Projet Banner Image should be a file of type: jpeg, png, jpg, pdf',
            'banner_image.*' => 'The Projet Banner Image should be a file of type: jpeg, png, jpg, pdf',
            'banner_image.*.max' => 'The Projet Banner Image size should be less than 2mb',
            'banner_image.*.mimes' => 'The Projet Banner Image should be a file of type: jpeg, png, jpg, pdf',

            'maha_rera_registration_number.required' => 'The Maha RERA Registration Number is required',
            'maha_rera_registration_number.string' => 'The Maha RERA Registration Number should be a string',
            'maha_rera_registration_number.max' => 'The Maha RERA Registration Number should not exceed 255 characters',

            'project_link.required' => 'The Project Link is required',
            'project_link.string' => 'The Project Link should be a string',
            'project_link.max' => 'The Project Link should not exceed 255 characters',

            // ==== Project Overview Details
            'overview_image.required' => 'The Project Overview Image is required',
            'overview_image.max' => 'The Project Overview Image size should be less than 2mb',
            'overview_image.mimes' => 'The Project Overview Image should be a file of type: jpeg, png, jpg, pdf',

            'project_description.required' => 'The Project Description is required',
            'project_description.string' => 'The Project Description should be a string',

            // ==== Hallmarks
            'hallmarks.required' => 'At least one Hallmark is required',
            'hallmarks.*.required' => 'Each Hallmark should be filled',
            'hallmarks.*.string' => 'Each Hallmark should be a string',
            'hallmarks.*.min' => 'Each Hallmark should have at least 2 characters',
            'hallmarks.*.max' => 'Each Hallmark should not exceed 255 characters',

            // ==== Location Advantages
            'location_advantages_title.required' => 'Title is required',
            'location_advantages_title.string' => 'Title should be a string',
            'location_advantages_title.max' => 'Title should not exceed 255 characters',

            'location_advantage_id.required' => 'At least one Location Advantage is required',
            'location_advantage_id.*.required' => 'Each Location Advantage should be filled',
            'location_advantage_id.*.string' => 'Each Location Advantage should be a string',
            'location_advantage_id.*.min' => 'Each Location Advantage should have at least 2 characters',
            'location_advantage_id.*.max' => 'Each Location Advantage should not exceed 255 characters',

            'feature_value.required' => 'At least one Feature Value is required',
            'feature_value.*.required' => 'Each Feature Value should be filled',
            'feature_value.*.string' => 'Each Feature Value should be a string',
            'feature_value.*.min' => 'Each Feature Value should have at least 2 characters',
            'feature_value.*.max' => 'Each Feature Value should not exceed 255 characters',

            // ==== Amenities & Features
            'amenities_title.required' => 'Title is required',
            'amenities_title.string' => 'Title should be a string',
            'amenities_title.max' => 'Title should not exceed 255 characters',

            'amenite_image.required' => 'Amenitie Image is required',
            'amenite_image.max' => 'Amenitie Image size should be less than 2mb',
            'amenite_image.mimes' => 'Amenitie Image should be a file of type: jpeg, png, jpg, pdf',
            'amenite_image.*.required' => 'Each Amenitie Image should be filled',
            'amenite_image.*.max' => 'Each Amenitie Image size should be less than 2mb',
            'amenite_image.*.mimes' => 'Each Amenitie Image should be a file of type: jpeg, png, jpg, pdf',

            'amenite_image_name.required' => 'Amenitie Name is required',
            'amenite_image_name.*.required' => 'Each Amenitie Name should be filled',
            'amenite_image_name.*.string' => 'Each Amenitie Name should be a string',
            'amenite_image_name.*.min' => 'Each Amenitie Name should have at least 2 characters',
            'amenite_image_name.*.max' => 'Each Amenitie Name should not exceed 255 characters',

            // ==== Gallery
            'gallery_title.required' => 'Gallery Title is required',
            'gallery_title.string' => 'Gallery Title should be a string',
            'gallery_title.max' => 'Gallery Title should not exceed 255 characters',

            'gallery_image.required' => 'Gallery Image is required',
            'gallery_image.max' => 'Gallery Image size should be less than 2mb',
            'gallery_image.mimes' => 'Gallery Image should be a file of type: jpeg, png, jpg, pdf',
            'gallery_image.*.required' => 'Each Gallery Image should be filled',
            'gallery_image.*.max' => 'Each Gallery Image size should be less than 2mb',
            'gallery_image.*.mimes' => 'Each Gallery Image should be a file of type: jpeg, png, jpg, pdf',

            'gallery_image_name.required' => 'Gallery Name is required',
            'gallery_image_name.*.required' => 'Each Gallery Name should be filled',
            'gallery_image_name.*.string' => 'Each Gallery Name should be a string',
            'gallery_image_name.*.min' => 'Each Gallery Name should have at least 2 characters',
            'gallery_image_name.*.max' => 'Each Gallery Name should not exceed 255 characters',
        ];
    }
}
