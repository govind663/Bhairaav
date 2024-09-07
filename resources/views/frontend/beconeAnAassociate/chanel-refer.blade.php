@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Loyalty Program
@endsection

@push('styles')
<style>
    .p{
        text-align: justify;
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

    <!-- Start Payment Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="refer-s">
                    <div class="row ref_gap_y_10">
                        <h2 class="cs_fs_28 cs_bold mb-1">Member Details</h2>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">First Name*</h4> -->
                            <input type="text" placeholder="First Name*" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">Last Name*</h4> -->
                            <input type="text" placeholder="Last Name*" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">Mobile No.</h4> -->
                            <input type="text" placeholder="Mobile No.*" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">Email Id*</h4> -->
                            <input type="text" placeholder="Email Id*" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">Project*</h4> -->
                            <input type="text" placeholder="Project*" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <!-- <h4 class="cs_fs_16 cs_bold mb-0">Unit/Flat No.*</h4> -->
                            <input type="text" placeholder="Unit/Flat No.*" class="cs_form_field_2 cs_radius_20">
                        </div>

                        <div class="ref-form-sec">
                            <div class="row ref_gap_y_10">
                                <h2 class="cs_fs_28 cs_bold mb-1">Member Details</h2>
                                <div class="col-sm-3">
                                    <!-- <h4 class="cs_fs_16 cs_bold mb-0">First Name*</h4> -->
                                    <input type="text" placeholder="First Name*" class="cs_form_field_2 cs_radius_20">
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h4 class="cs_fs_16 cs_bold mb-0">First Name*</h4> -->
                                    <input type="text" placeholder="Last Name*" class="cs_form_field_2 cs_radius_20">
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h4 class="cs_fs_16 cs_bold mb-0">Email Id*</h4> -->
                                    <input type="text" placeholder="Email Id*" class="cs_form_field_2 cs_radius_20">
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h4 class="cs_fs_16 cs_bold mb-0">Unit/Flat No.*</h4> -->
                                    <input type="text" placeholder="Relation*" class="cs_form_field_2 cs_radius_20">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ref-btn-sec">
                        <button class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
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
                        <button class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
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


                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Payment Section -->
@endsection

@push('scripts')
@endpush
