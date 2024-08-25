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
            ];
        }else{
            $rule = [
                'description' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'description.required' => 'The description field is required.',
            'description.string' => 'The description field must be a string.',
        ];
    }
}
