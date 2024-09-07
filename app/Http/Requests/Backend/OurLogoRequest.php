<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurLogoRequest extends FormRequest
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
                'logo_image' => 'mimes:jpeg,png,jpg|max:2048',
            ];
        }else{
            $rule = [
                'description' => 'required|string',
                'logo_image' => 'required|mimes:jpeg,png,jpg|max:2048',
            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'description.required' => 'The description field is required.',
            'description.string' => 'The description field must be a string.',

            'logo_image.required' => 'The logo image is required.',
            'logo_image.mimes' => 'The logo image must be a file of type: jpeg, png, jpg.',
            'logo_image.max' => 'The logo image may not be greater than 2048 kilobytes.',
        ];
    }
}
