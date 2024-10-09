@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Channel Partner
@endsection

@push('styles')
    <style>
        .is-invalid {
            border-color: #dc3545;
            /* Bootstrap's red color for errors */
        }

        .invalid-feedback {
            color: #dc3545;
            /* Match the border color */
            font-size: 0.875em;
            /* Adjust font size as needed */
        }

        /* Change the background color of the modal body */
        .modal-body {
            background-color: #f1f1f1; /* Light gray background */
        }

        /* Style the list items in the modal */
        .modal-body ul li {
            margin-bottom: 10px; /* Spacing between list items */
        }

        /* Customize the close button */
        .close {
            color: #007bff; /* Change the color of the close button */
        }

        /* styles.css */
        .modal-header {
            justify-content: space-between;
            background-color: #f8f9fa; /* Light background */
            border-bottom: 2px solid #007bff; /* Blue border */
        }

        .modal-title {
            color: #007bff; /* Blue color for the title */
        }

        .modal-body {
            font-size: 14px; /* Set font size for the body */
            line-height: 1.5; /* Increase line height for better readability */
        }

        .modal-body ul {
            padding-left: 1.5em; /* Indentation for lists */
        }

        .text-danger {
            color: #dc3545; /* Bootstrap danger color */
        }
    </style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/17050.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Channel Partner</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Payment Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="alliances-sec">
                    <h2 class="cs_fs_38 cs_mb_20">
                        Our Prestigious Alliances - Channel Partner
                    </h2>
                    <p>Partnership leads to Win-Win. We believe in the power of synergy and mutual growth.</p>
                    <p>Please fill in the form below to partner with the Bhairaav Group.</p>
                </div>

                <form method="POST" action="{{ route('store-channel-partner') }}" class="form-horizontal"
                    enctype="multipart/form-data" autocomplete="off">
                    @csrf

                    <div class="row cs_gap_y_20">
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Company Name/ Individual Name : <span
                                        class="text-danger">*</span></b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('companyNameOrIndividualName') is-invalid @enderror"
                                name="companyNameOrIndividualName" id="companyNameOrIndividualName"
                                value="{{ old('companyNameOrIndividualName') }}"
                                placeholder="Enter Company Name / Individual Name">
                            @error('companyNameOrIndividualName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Name of the owner : <span class="text-danger">*</span></b>
                            </h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('nameOfTheOwner') is-invalid @enderror"
                                name="nameOfTheOwner" id="nameOfTheOwner" value="{{ old('nameOfTheOwner') }}"
                                placeholder="Enter Name of the owner">
                            @error('nameOfTheOwner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Entity : <span class="text-danger">*</span></b></h4>
                            <ul
                                class="cs_payment_method_list cs_primary_color cs_payment_method_list @error('entity') is-invalid @enderror">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="1"
                                            {{ old('entity') == '1' ? 'checked' : '' }}>
                                        <label>Individual</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="2"
                                            {{ old('entity') == '2' ? 'checked' : '' }}>
                                        <label>Private Ltd. Co.</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="3"
                                            {{ old('entity') == '3' ? 'checked' : '' }}>
                                        <label>Public Ltd. Co.</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="3"
                                            {{ old('entity') == '3' ? 'checked' : '' }}>
                                        <label>Proprietorship</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="4"
                                            {{ old('entity') == '4' ? 'checked' : '' }}>
                                        <label>Partnership</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="entity" value="5"
                                            {{ old('entity') == '5' ? 'checked' : '' }}>
                                        <label>LLP</label>
                                    </div>
                                </li>
                            </ul>
                            @error('entity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Office Address : <span class="text-danger">*</span></b>
                            </h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('officeAddress') is-invalid @enderror"
                                name="officeAddress" id="officeAddress" value="{{ old('officeAddress') }}"
                                placeholder="Enter Office Address">
                            @error('officeAddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Tel No. :</b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('telephoneNumber') is-invalid @enderror"
                                maxlength="10" name="telephoneNumber" id="telephoneNumber"
                                value="{{ old('telephoneNumber') }}" placeholder="Enter Telephone Number">
                            @error('telephoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Mobile No. :</b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('mobileNumber') is-invalid @enderror"
                                maxlength="10" name="mobileNumber" id="mobileNumber" value="{{ old('mobileNumber') }}"
                                placeholder="Enter Mobile Number">
                            @error('mobileNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Website (Ex. http://google.com ) :</b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('website') is-invalid @enderror" name="website"
                                id="website" value="{{ old('website') }}" placeholder="Enter Website">
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Email Id : <span class="text-danger">*</span></b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('emailId') is-invalid @enderror" name="emailId"
                                id="emailId" value="{{ old('emailId') }}" placeholder="Enter Email Id">
                            @error('emailId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Number of Years in Operation : <span
                                        class="text-danger">*</span></b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('numberOfYearsInOperation') is-invalid @enderror"
                                name="numberOfYearsInOperation" id="numberOfYearsInOperation"
                                value="{{ old('numberOfYearsInOperation') }}"
                                placeholder="Enter Number of Years in Operation">
                            @error('numberOfYearsInOperation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                <b>Expertise : <span class="text-danger">*</span></b>
                            </h4>
                            <ul
                                class="cs_payment_method_list cs_primary_color cs_payment_method_list @error('preferredExpertise') is-invalid @enderror">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="preferredExpertise" id="preferredExpertise"
                                            value="1" {{ old('preferredExpertise') == '1' ? 'checked' : '' }}>
                                        <label>Residential</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="preferredExpertise" id="preferredExpertise"
                                            value="2" {{ old('preferredExpertise') == '2' ? 'checked' : '' }}>
                                        <label>Commercial</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="preferredExpertise" id="preferredExpertise"
                                            value="3" {{ old('preferredExpertise') == '3' ? 'checked' : '' }}>
                                        <label> Retail </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="preferredExpertise" id="preferredExpertise"
                                            value="4" {{ old('preferredExpertise') == '4' ? 'checked' : '' }}>
                                        <label> Industrial Land </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="preferredExpertise" id="preferredExpertise"
                                            value="5" {{ old('preferredExpertise') == '5' ? 'checked' : '' }}>
                                        <label>Other</label>
                                    </div>
                                </li>
                            </ul>
                            @error('preferredExpertise')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            {{-- Other Expertise --}}
                            <div class="col-sm-6 pt-3" id="otherPreferredExpertiseDiv" style="display:none;">
                                <input type="text" class="cs_form_field_2 cs_radius_20" name="otherPreferredExpertise"
                                    id="otherPreferredExpertise" value="{{ old('otherPreferredExpertise') }}"
                                    placeholder="Please specify other expertise">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>PAN Card No. : <span class="text-danger">*</span></b>
                            </h4>
                            <input type="text" maxlength="12"
                                class="cs_form_field_2 cs_radius_20 @error('panCardNo') is-invalid @enderror"
                                name="panCardNo" id="panCardNo" value="{{ old('panCardNo') }}"
                                placeholder="Enter PAN Card No.">
                            @error('panCardNo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>GST No. : </b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('gstNo') is-invalid @enderror" name="gstNo"
                                id="gstNo" value="{{ old('gstNo') }}" placeholder="Enter GST No.">
                            @error('gstNo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>RERA No. : <span class="text-danger">*</span></b></h4>
                            <input type="text"
                                class="cs_form_field_2 cs_radius_20 @error('reraNo') is-invalid @enderror" name="reraNo"
                                id="reraNo" value="{{ old('reraNo') }}" placeholder="Enter RERA No.">
                            @error('reraNo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                <b>Affiliation to any Broker Association ? : <span class="text-danger">*</span></b>
                            </h4>
                            <ul
                                class="cs_payment_method_list cs_primary_color cs_payment_method_list @error('brokerAffiliation') is-invalid @enderror">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="brokerAffiliation" id="brokerAffiliationYes"
                                            value="1" {{ old('brokerAffiliation') == '1' ? 'checked' : '' }}>
                                        <label>Yes</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="brokerAffiliation" id="brokerAffiliationNo"
                                            value="2" {{ old('brokerAffiliation') == '2' ? 'checked' : '' }}>
                                        <label>No</label>
                                    </div>
                                </li>
                            </ul>
                            @error('brokerAffiliation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                <b>Which of the Bhairaav's Properties are you interested in ? : <span
                                        class="text-danger">*</span></b>
                            </h4>
                            <ul
                                class="cs_payment_method_list cs_primary_color cs_payment_method_list @error('propertiesType') is-invalid @enderror">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="propertiesType" value="1"
                                            {{ old('propertiesType') == '1' ? 'checked' : '' }}>
                                        <label>Goldcrest Residency</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="propertiesType" value="2"
                                            {{ old('propertiesType') == '2' ? 'checked' : '' }}>
                                        <label>Jewel of Queen</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="propertiesType" value="3"
                                            {{ old('propertiesType') == '3' ? 'checked' : '' }}>
                                        <label>TCP Corporate Park</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="propertiesType" value="4"
                                            {{ old('propertiesType') == '4' ? 'checked' : '' }}>
                                        <label>Bhairaav Milestone</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="propertiesType" value="5"
                                            {{ old('propertiesType') == '5' ? 'checked' : '' }}>
                                        <label>Other</label>
                                    </div>
                                </li>
                            </ul>
                            @error('propertiesType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- Other propertiesType --}}
                            <div class="col-sm-6 pt-3" id="otherPropertiesTypeDiv" style="display:none;">
                                <input type="text" class="cs_form_field_2 cs_radius_20" name="otherPropertiesType"
                                    id="otherPropertiesType" value="{{ old('otherPropertiesType') }}"
                                    placeholder="Enter Other Properties Type">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                <b>Authorised Signatories ? : <span class="text-danger">*</span></b>
                            </h4>
                            <ul
                                class="cs_payment_method_list cs_primary_color cs_payment_method_list @error('authorizedSignatories') is-invalid @enderror">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="authorizedSignatories" id="authorizedSignatories"
                                            value="1" {{ old('authorizedSignatories') == '1' ? 'checked' : '' }}>
                                        <label>Single</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="authorizedSignatories" id="authorizedSignatories"
                                            value="2" {{ old('authorizedSignatories') == '2' ? 'checked' : '' }}>
                                        <label>Jointly</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="authorizedSignatories" id="authorizedSignatories"
                                            value="3" {{ old('authorizedSignatories') == '3' ? 'checked' : '' }}>
                                        <label>Anyone</label>
                                    </div>
                                </li>
                            </ul>
                            @error('authorizedSignatories')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Name : <span class="text-danger">*</span></b></h4>
                            <input type="text" name="name"
                                class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}" placeholder="Enter Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Designation : <span class="text-danger">*</span></b></h4>
                            <input type="text" name="designation"
                                class="cs_form_field_2 cs_radius_20 @error('designation') is-invalid @enderror"
                                id="designation" value="{{ old('designation') }}" placeholder="Enter Designation">
                            @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Upload PAN Card : <span class="text-danger">*</span></b>
                            </h4>
                            <input type="file"
                                class="cs_form_field_2 cs_radius_20 @error('pancard_doc') is-invalid @enderror"
                                onchange="pancardPreviewFile()" accept=".png, .jpg, .jpeg, .pdf" name="pancard_doc"
                                id="pancard_doc" value="{{ old('pancard_doc') }}">
                            <small class="text-secondary"><b>Note : The file size should be less than 2MB .</b></small>
                            <br>
                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .pdf format can be
                                    uploaded .</b></small>
                            <br>
                            @error('pancard_doc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <div id="pancard-preview-container">
                                <div id="file-pancard-preview"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0"><b>Upload Aadhar Card : <span
                                        class="text-danger">*</span></b></h4>
                            <input type="file"
                                class="cs_form_field_2 cs_radius_20 @error('aadhar_doc') is-invalid @enderror"
                                onchange="aadharcardPreviewFile()" accept=".png, .jpg, .jpeg, .pdf" name="aadhar_doc"
                                id="aadhar_doc" value="{{ old('aadhar_doc') }}">
                            <small class="text-secondary"><b>Note : The file size should be less than 2MB .</b></small>
                            <br>
                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .pdf format can be
                                    uploaded .</b></small>
                            <br>
                            @error('aadhar_doc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <div id="aadhar-preview-container">
                                <div id="file-aadhar-preview"></div>
                            </div>
                        </div>

                        <div class="cs_mb_15">
                            <div class="cs_checkbox @error('terms') is-invalid @enderror">
                                <input type="checkbox" name="terms" onclick="checkTerms()" class="cs_primary_color"
                                    id="terms" value="1" {{ old('terms') == 1 ? 'checked' : '' }}>
                                <label>
                                    <b>
                                        I agree to all
                                        <a href="" data-toggle="modal" class="text-primary text-bold" data-target=".bd-tc-modal-lg">Terms & Conditions</a>
                                        for appointment as Bhairaav Group's Channel Partner.
                                        <span class="text-danger">*</span>
                                    </b>
                                </label>
                            </div>
                            @error('terms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12 mb-3">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" type="submit">
                        <b>Submit</b>
                        <span>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </i>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </i>
                        </span>
                    </button>
                </form>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Payment Section -->

    <!-- MODAL Terms & Condition -->
    <div class="modal fade bd-tc-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: space-between;">
                    <h5 class="modal-title">Terms & Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-mod">
                    <ul class="ml-3">
                        <li class="mt-2">Selection of application is at the absolute discretion of Bhairaav Group.
                        </li>
                        <li class="mt-2">Bhairaav Group can accept or reject the application without assigning any
                            reasons.
                        </li>
                        <li class="mt-2">The application shall be complete in all respects and shall be accompanied by
                            requisite documents.
                        </li>
                        <li class="mt-2">
                            Channel Partner/s is an independent broker and this Arrangement is not meant to create nor
                            shall it be deemed to create any type of employer- employee relationship, partnership, Joint
                            venture or agency relationship with the Company.

                        </li>
                        <li class="mt-2">
                            The Channel Partner/s will not use the Company's name, trademark, copyrights, symbols, designs,
                            logos or other marks by whatever name called without the prior written consent of the Company.
                        </li>
                        <li class="mt-2">
                            Channel Partner is not authorized to send any written communication regarding Bhairaav Group or
                            its projects in any medium without the prior written permission of the Company.
                        </li>
                        <li class="mt-2">
                            All discussions between Bhairaav Group and applicant and the information contained in the
                            documents shall be confidential and shall not be disclosed to anyone except to the subsidiaries.
                        </li>
                        <li class="mt-2">
                            The applicant confirms that he/she/it is not involved in any economic offences, tax default or
                            moral turpitude.
                        </li>
                        <li class="mt-2">
                            Constitution Documents and Registration Certificates issued by Competent Authorities shall
                            accompany along with the application, without which the application shall not be processed.
                        </li>
                        <li class="mt-2">
                            MahaRERA registration Certificates & GST Certificate to be submitted alongwith the application
                        </li>
                        <li class="mt-2">
                            All Payments to Channel Partner/s shall be made in Indian currency after deduction of
                            applicable taxes. The Payments shall at all times be subject to being permitted and valid under
                            applicable policies, laws, orders, and regulations. Subject to the fulfilment of Conditions (a)
                            and (b) of clause 13 mentioned hereunder, the company shall endeavour to pay the Commission
                            within 45 days of receipt of the invoice. All Payments shall be made subject to deduction of tax
                            at source.
                        </li>
                        <li class="mt-2">
                            The Channel Partner/s shall raise an invoice for the amounts payable by the company. Each
                            invoice shall be delivered to the address of the Company, as specified, by courier or or by
                            email or by hand delivery.
                        </li>
                        <li class="mt-2">
                            <strong>Remuneration Procedure:</strong>
                            <ul class="pl-3">
                                <li><em>In case of Rental / Lease deal</em>
                                    <ul class="pl-3">
                                        <li>3 year and above Lock in period, 2 month pay-out to be given.</li>
                                        <li>1 or 2 years Lock-in period, 1 month pay-out to be given. </li>
                                        <li><strong>Payment terms:</strong> 50% payment after registration and 50% payment
                                            after we receive 1st month rent. </li>
                                    </ul>
                                </li>
                                <li>
                                    <em>In case of outright sales </em>
                                    <ul class="pl-3">
                                        <li>In South / Central Mumbai the payment will be 1% on Base price + Floor
                                            Rise.</li>
                                        <li>In Navi Mumbai, Thane & Western / Eastern Suburbs it will be 2% on Base
                                            price + Floor Rise.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mt-2">
                            The Channel Partner/s is/are aware and agrees that as per the Company's policy, a background
                            verification of the Channel Partner/s through third party agencies and/or Company employees will
                            be conducted to verify the details provided by the Channel Partner/s at the time of Channel
                            Partner/s registration. In the event it is brought to the notice of the Company that any of the
                            information provided by the Channel Partner is false or incomplete or incorrect or malicious,
                            the Company, without prejudice to its other rights and remedies, be entitled to cancel
                            registration/process thereof of the Channel Partner/s.
                        </li>
                        <li class="mt-2">
                            The Company reserves the right, in its sole discretion, to modify or suspend the Terms &
                            Conditions of this Registration Form.
                        </li>
                        <li class="mt-2">
                            This Terms & Conditions shall be governed by law of India. Any dispute shall be subject to the
                            exclusive jurisdiction of the Courts of Mumbai.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <!-- Add jQuery Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    {{-- preview PAN Card both image and PDF --}}
    <script>
        function pancardPreviewFile() {
            const fileInput = document.getElementById('pancard_doc');
            const previewContainer = document.getElementById('pancard-preview-container');
            const filePreview = document.getElementById('file-pancard-preview');
            const file = fileInput.files[0];

            if (file) {
                const fileType = file.type;
                const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                const validPdfTypes = ['application/pdf'];

                if (validImageTypes.includes(fileType)) {
                    // Image preview
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        filePreview.innerHTML =
                            `<img src="${e.target.result}" alt="File Preview" width="50%" height="50">`;
                    };
                    reader.readAsDataURL(file);
                } else if (validPdfTypes.includes(fileType)) {
                    // PDF preview using an embed element
                    filePreview.innerHTML =
                        `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="150px" />`;
                } else {
                    // Unsupported file type
                    filePreview.innerHTML = '<p>Unsupported file type</p>';
                }

                previewContainer.style.display = 'block';
            } else {
                // No file selected
                previewContainer.style.display = 'none';
            }

        }
    </script>

    {{-- preview Aadhar Card both image and PDF --}}
    <script>
        function aadharcardPreviewFile() {
            const fileInput = document.getElementById('aadhar_doc');
            const previewContainer = document.getElementById('aadhar-preview-container');
            const filePreview = document.getElementById('file-aadhar-preview');
            const file = fileInput.files[0];

            if (file) {
                const fileType = file.type;
                const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                const validPdfTypes = ['application/pdf'];

                if (validImageTypes.includes(fileType)) {
                    // Image preview
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        filePreview.innerHTML =
                            `<img src="${e.target.result}" alt="File Preview" width="50%" height="50">`;
                    };
                    reader.readAsDataURL(file);
                } else if (validPdfTypes.includes(fileType)) {
                    // PDF preview using an embed element
                    filePreview.innerHTML =
                        `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="150px" />`;
                } else {
                    // Unsupported file type
                    filePreview.innerHTML = '<p>Unsupported file type</p>';
                }

                previewContainer.style.display = 'block';
            } else {
                // No file selected
                previewContainer.style.display = 'none';
            }

        }
    </script>

    <script>
        //  === checkTerms
        function checkTerms() {
            if (document.getElementById('terms').checked) {
                document.getElementById('submitBtn').disabled = false;
            } else {
                document.getElementById('submitBtn').disabled = true;
                document.getElementById('termsError').textContent = 'You must agree to the Terms & Conditions';
                document.getElementById('termsError').style.display = 'block';
            }
            return false;
        }
    </script>

    {{-- Show and Hide Div for otherPreferredExpertiseDiv --}}
    <script>
        $(document).ready(function() {
            // Check initial selection and toggle the 'Other' field accordingly
            toggleOtherField();

            // On change of radio buttons, toggle the 'Other' field
            $('input[name="preferredExpertise"]').on('change', function() {
                toggleOtherField();
            });

            function toggleOtherField() {
                if ($('input[name="preferredExpertise"]:checked').val() == 5) {
                    $('#otherPreferredExpertiseDiv').show(); // Show the "Other" field
                } else {
                    $('#otherPreferredExpertiseDiv').hide(); // Hide the "Other" field
                }
            }
        });
    </script>

    {{-- Show and Hide Div for otherPropertiesTypeDiv --}}
    <script>
        $(document).ready(function() {
            // Check initial selection and toggle the 'Other' field accordingly
            toggleOtherField();

            // On change of radio buttons, toggle the 'Other' field
            $('input[name="propertiesType"]').on('change', function() {
                toggleOtherField();
            });

            function toggleOtherField() {
                if ($('input[name="propertiesType"]:checked').val() == 5) {
                    $('#otherPropertiesTypeDiv').show(); // Show the "Other" field
                } else {
                    $('#otherPropertiesTypeDiv').hide(); // Hide the "Other" field
                }
            }
        });
    </script>
@endpush
