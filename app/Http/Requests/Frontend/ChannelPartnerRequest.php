<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ChannelPartnerRequest extends FormRequest
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
                'companyNameOrIndividualName' => 'required|string|max:555',
                'nameOfTheOwner' => 'required|string|max:255',
                'entity' => 'required|numeric',
                'officeAddress' => 'required|string|max:255',
                'telephoneNumber' => 'nullable',
                'mobileNumber' => 'nullable',
                'website' =>'nullable',
                'emailId' =>'required|email|string|max:255',
                'numberOfYearsInOperation' => 'required|numeric',
                'preferredExpertise' => 'required',
                'panCardNo' => 'required|string|max:255',
                'gstNo' => 'nullable|max:255',
                'reraNo' => 'required|string|max:255',
                'brokerAffiliation' => 'required',
                'chanel_id' => 'nullable|numeric',
                'propertiesType' => 'required',
                'authorizedSignatories' => 'required|numeric',
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'pancard_doc' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'aadhar_doc' => 'mimes:jpeg,png,jpg,pdf|max:2048',
                'terms' => 'required|accepted',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }else{
            $rule = [
                'companyNameOrIndividualName' => 'required|string|max:555',
                'nameOfTheOwner' => 'required|string|max:255',
                'entity' => 'required|numeric',
                'officeAddress' => 'required|string|max:255',
                'telephoneNumber' => 'nullable',
                'mobileNumber' => 'nullable',
                'website' =>'nullable',
                'emailId' =>'required|email|string|max:255',
                'numberOfYearsInOperation' => 'required|numeric',
                'preferredExpertise' => 'required',
                'panCardNo' => 'required|string|max:255',
                'gstNo' => 'nullable|max:255',
                'reraNo' => 'required|string|max:255',
                'brokerAffiliation' => 'required',
                'chanel_id' => 'nullable|numeric',
                'propertiesType' => 'required',
                'authorizedSignatories' => 'required|numeric',
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'pancard_doc' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'aadhar_doc' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
                'terms' => 'required|accepted',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }

        return $rule;
    }

    public function messages()
    {
        return [
            'companyNameOrIndividualName.required' => __('Company Name / Individual Name is required'),
            'companyNameOrIndividualName.max' => __('The length of Company Name / Individual Name should not exceed 255 characters'),
            'companyNameOrIndividualName.string' => __('The name Company Name / Individual Name be a string.'),

            'nameOfTheOwner.required' => __('Name of the Owner is required'),
            'nameOfTheOwner.max' => __('The length of Name of the Owner should not exceed 255 characters'),
            'nameOfTheOwner.string' => __('The name Name of the Owner be a string.'),

            'entity.required' => __('Entity is required'),
            'entity.min' => __('The length of Entity should not less than 3 characters'),
            'entity.numeric' => __('The Entity be a number.'),
            'entity.in' => __('The Entity must be one of the following: 1, 2, 3, 4, 5.'),

            'officeAddress.required' => __('Office Address is required'),
            'officeAddress.max' => __('The length of Office Address should not exceed 255 characters'),
            'officeAddress.string' => __('The Office Address be a string.'),

            'telephoneNumber.numeric' => __('The Telephone Number be a number.'),

            'mobileNumber.numeric' => __('The Mobile Number be a number.'),

            'website.max' => __('The length of Website should not exceed 255 characters'),
            'website.string' => __('The Website be a string.'),

            'emailId.required' => __('Email Id is required'),
            'emailId.email' => __('The Email Id be a valid email address.'),
            'emailId.max' => __('The length of Email Id should not exceed 255 characters'),
            'emailId.string' => __('The Email Id be a string.'),

            'numberOfYearsInOperation.required' => __('Number of Years in Operation is required'),
            'numberOfYearsInOperation.numeric' => __('The Number of Years in Operation be a number.'),

            'preferredExpertise.required' => __('Expertise is required'),

            'panCardNo.required' => __('Pan Card Number is required'),
            'panCardNo.string' => __('The Pan Card Number be a string.'),
            'panCardNo.max' => __('The length of Pan Card Number should not exceed 255 characters.'),

            'gstNo.required' => __('GST Number is required'),
            'gstNo.string' => __('The GST Number be a string.'),
            'gstNo.max' => __('The length of GST Number should not exceed 255 characters.'),

            'reraNo.required' => __('RERA Number is required'),
            'reraNo.string' => __('The RERA Number be a string.'),
            'reraNo.max' => __('The length of RERA Number should not exceed 255 characters.'),

            'brokerAffiliation.required' => __('Affiliation to any Broker Association is required'),
            'brokerAffiliation.numeric' => __('The Affiliation to any Broker Association be a number.'),
            'brokerAffiliation.in' => __('The Affiliation to any Broker Association must be one of the following: 1, 2.'),

            'propertiesType.required' => __("Which of the Bhairaav's Properties are you interested is required"),

            'authorizedSignatories.required' => __('Authorised Signatories is required'),
            'authorizedSignatories.numeric' => __('The Authorised Signatories be a number.'),
            'authorizedSignatories.in' => __('The Authorised Signatories must be one of the following: 1, 2, 3.'),

            'name.required' => __('Name is required'),
            'name.max' => __('The length of Name should not exceed 255 characters'),
            'name.string' => __('The Name be a string.'),

            'designation.required' => __('Designation is required'),
            'designation.max' => __('The length of Designation should not exceed 255 characters'),
            'designation.string' => __('The Designation be a string.'),

            'pancard_doc.required' => __('Pan Card is required'),
            'pancard_doc.mimes' => __('Pan Card must be a file of type: jpeg, png, jpg, pdf.'),
            'pancard_doc.max' => __('The size of Pan Card should not exceed 2 MB.'),

            'aadhar_doc.required' => __('Aadhar Card is required'),
            'aadhar_doc.mimes' => __('Aadhar Card must be a file of type: jpeg, png, jpg, pdf.'),
            'aadhar_doc.max' => __('The size of Aadhar Card should not exceed 2 MB.'),

            'terms.required' => __('Terms & Conditions is required'),
            'terms.accepted' => __('Terms & Conditions must be accepted.'),

            'g-recaptcha-response.required' => __('Please verify you are a human.'),
            'g-recaptcha-response.captcha' => __('Captcha verification failed, please try again.'),
        ];
    }
}
