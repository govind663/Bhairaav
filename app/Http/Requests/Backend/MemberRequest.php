<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
                'members_image' => 'mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }else{
            $rule = [
                'members_image' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'members_image.required' => 'The Image field is required',
            'members_image.max' => 'The Image size should be less than 2mb',
            'members_image.mimes' => 'The Image should be a file of type: jpeg, png, jpg, pdf',
        ];
    }
}
