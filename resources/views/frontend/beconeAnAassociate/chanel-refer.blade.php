@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Loyalty Program
@endsection

@push('styles')
<style>
    .p{
        text-align: justify;
    }
    .is-invalid {
        border-color: #dc3545; /* Bootstrap's red color for errors */
    }

    .invalid-feedback {
        color: #dc3545; /* Match the border color */
        font-size: 0.875em; /* Adjust font size as needed */
    }
</style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/17050.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Loyalty Program</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Loyalty Program Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <!-- <div class="col-lg-6">
                    <div class="cs_pr_110 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <img src="assets/img/about/ak_648_455877381-1600672668_700x700.jpeg" alt="Service" class="cs_radius_5">
                    </div>
                </div> -->
                @foreach ($loyalityProgram as $value)
                <div class="col-lg-12">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <!-- <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                Overview
                            </p> -->
                            <h2 class="cs_fs_31 cs_bold cs_mb_20">
                                {{ $value->title }}
                            </h2>
                        </div>
                    </div>

                    <p>
                        {!! $value->description !!}
                    </p>

                    <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec">
                        @if(!empty($value->other_description))
                            @foreach(json_decode($value->other_description) as $key => $otherDescription)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path
                                                d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                fill="currentColor">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $otherDescription  }}
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </div>
                @endforeach
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Loyalty Program Section -->

    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/about/2149667853.jpg') }}">
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Page Heading Section -->
    <section class="ref_page_heading">
        <div class="container">
            <h2 class="cs_fs_28 cs_bold cs_white_color mb-3">
                How Does This Loyalty Program Work?
            </h2>
            <p class="cs_white_color mb-3">
                {!! $howWorkLoyaltyPrograms->description !!}
            </p>
            <h2 class="cs_fs_21 cs_bold cs_white_color mb-3">
                What If I Want To Buy Another Property With Bhairaav?
            </h2>
            <p class="cs_white_color mb-3">
                {!! $re_investment_loyalty_programs->description !!}
            </p>
            <h2 class="cs_fs_21 cs_bold cs_white_color mb-3">
                How Do I Refer?
            </h2>
            <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec-2">
                @foreach ($refer as $key => $value)
                <li>
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(.clip0_95_13)">
                            <path
                                d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                fill="currentColor">
                            </path>
                        </g>
                        <defs>
                            <clipPath class="clip0_95_13">
                                <rect width="25" height="25" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    {!! $value->description !!}
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Member Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="refer-s">

                    <form method="POST" action="{{ route('store-member-details') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row ref_gap_y_10">
                            <h2 class="cs_fs_28 cs_bold mb-1">Member Details</h2>

                            <div class="col-sm-4">
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('f_name') is-invalid @enderror" name="f_name" id="f_name" value="{{ old('f_name') }}" placeholder="First Name *">
                                @error('f_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('l_name') is-invalid @enderror" name="l_name" id="l_name" value="{{ old('l_name') }}" placeholder="Last Name *">
                                @error('l_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('mobile_no') is-invalid @enderror" maxlength="10" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}" placeholder="Mobile Nuumber *">
                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <input type="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" maxlength="10" name="email" id="email" value="{{ old('email') }}" placeholder="Email Id *">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <select name="project" id="project" class="cs_form_field_2 cs_radius_20 @error('project') is-invalid @enderror">
                                    <optgroup>
                                        <option value="">Select Project</option>
                                        <option class="cs_bold">Residential Projects</option>
                                        <option value="1" {{ old('project') == 1 ? 'selected' : '' }}>Goldcrest Residency</option>
                                        <option value="2" {{ old('project') == 2 ? 'selected' : '' }}>Jewel of Queen</option>
                                    </optgroup>
                                    <optgroup>
                                        <option class="cs_bold">Commercial Projects</option>
                                        <option value="3" {{ old('project') == 3 ? 'selected' : '' }}>Bhairaav Milestone</option>
                                        <option value="4" {{ old('project') == 4 ? 'selected' : '' }}>TCP The Corporate Park</option>
                                    </optgroup>
                                    <optgroup>
                                        <option class="cs_bold">Completed Projects</option>
                                        <option value="5" {{ old('project') == 5 ? 'selected' : '' }}>Bhairaav Darshan</option>
                                        <option value="6" {{ old('project') == 6 ? 'selected' : '' }}>Parshwa Padma</option>
                                        <option value="7" {{ old('project') == 7 ? 'selected' : '' }}>Madhuban</option>
                                        <option value="8" {{ old('project') == 8 ? 'selected' : '' }}>Bhairaav Signature</option>
                                        <option value="9" {{ old('project') == 9 ? 'selected' : '' }}>BHairaav Blessings</option>
                                        <option value="10" {{ old('project') == 10 ? 'selected' : '' }}>Jupitor</option>
                                        <option value="11" {{ old('project') == 11 ? 'selected' : '' }}>Four Season</option>
                                        <option value="12" {{ old('project') == 12 ? 'selected' : '' }}>C Teja Signature</option>
                                    </optgroup>
                                    <optgroup>
                                        <option class="cs_bold">Upcoming Projects</option>
                                        <option value="13" {{ old('project') == 13 ? 'selected' : '' }}>Bhairaav Blossom </option>
                                        <option value="14" {{ old('project') == 14 ? 'selected' : '' }}>SRA Project </option>
                                        <option value="15" {{ old('project') == 15 ? 'selected' : '' }}>Bhairaav Moksh </option>
                                        <option value="16" {{ old('project') == 16 ? 'selected' : '' }}>Redevelopment Project </option>
                                    </optgroup>
                                </select>
                                @error('project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('unit_or_flat') is-invalid @enderror" name="unit_or_flat" id="unit_or_flat" value="{{ old('unit_or_flat') }}" placeholder="Unit / Flat No. *">
                                @error('unit_or_flat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="ref-form-sec" id="dynamicReferralDetail">
                                <h2 class="cs_fs_28 cs_bold mb-1">Referral Details</h2>

                                <div class="row ref_gap_y_10">
                                    <div class="col-sm-3">
                                        <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_f_name.*') is-invalid @enderror" name="refer_f_name[]" id="refer_f_name" value="{{ old('refer_f_name.0') }}" placeholder="First Name *">
                                        @error('refer_f_name.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_l_name.*') is-invalid @enderror" name="refer_l_name[]" id="refer_l_name" value="{{ old('refer_l_name.0') }}" placeholder="Last Name *">
                                        @error('refer_l_name.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="email" class="cs_form_field_2 cs_radius_20 @error('refer_email.*') is-invalid @enderror" name="refer_email[]" id="refer_email" value="{{ old('refer_email.0') }}" placeholder="Email *">
                                        @error('refer_email.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_relation.*') is-invalid @enderror" name="refer_relation[]" id="refer_relation" value="{{ old('refer_relation.0') }}" placeholder="Relation *">
                                        @error('refer_relation.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ref-btn-sec">
                            <button type="submit" class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
                                <b>Submit</b>
                                <span>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                </span>
                            </button>
                            <button type="button" class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" id="addReferralDetailRow">
                                <b>Add Member</b>
                                <span>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Member Section -->
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Add a new row for Referral Details
        $('#addReferralDetailRow').click(function () {
            var newRow = `
                <div class="ref-form-sec">
                    <div class="row ref_gap_y_10">
                        <div class="col-sm-3">
                            <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_f_name.*') is-invalid @enderror" name="refer_f_name[]" id="refer_f_name" value="{{ old('refer_f_name.0') }}" placeholder="First Name *">
                            @error('refer_f_name.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-3">
                            <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_l_name.*') is-invalid @enderror" name="refer_l_name[]" id="refer_l_name" value="{{ old('refer_l_name.0') }}" placeholder="Last Name *">
                            @error('refer_l_name.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-3">
                            <input type="email" class="cs_form_field_2 cs_radius_20 @error('refer_email.*') is-invalid @enderror" name="refer_email[]" id="refer_email" value="{{ old('refer_email.0') }}" placeholder="Email *">
                            @error('refer_email.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-3">
                            <input type="text" class="cs_form_field_2 cs_radius_20 @error('refer_relation.*') is-invalid @enderror" name="refer_relation[]" id="refer_relation" value="{{ old('refer_relation.0') }}" placeholder="Relation *">
                            @error('refer_relation.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="ref-btn-sec">
                        <button type="button" class="btn btn-danger cs_radius_20 cs_fs_15 removeReferralDetailRow ">
                            <b>Remove Member</b>
                            <span>
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                </i>
                            </span>
                        </button>
                    </div>
                </div>
            `;

            // Append the new row to the dynamic section
            $('#dynamicReferralDetail').append(newRow);
        });

        // Remove a row for Referral Details
        $(document).on('click', '.removeReferralDetailRow', function () {
            // Remove the row
            $(this).closest('.ref-form-sec').remove();

            // Reindex the rows
            $('.ref-form-sec').each(function (index) {
                $(this).find('input').each(function () {
                    var name = $(this).attr('name').replace(/\[\d+\]/, `[${index}]`);
                    $(this).attr('name', name).attr('id', $(this).attr('id').replace(/\d+/, index));
                });
            });

            // Update the counter
            counter = $('.ref-form-sec').length;

        });
    });
</script>
@endpush
