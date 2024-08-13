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
                <div class="col-lg-12">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <!-- <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                        Overview
                    </p> -->
                            <h2 class="cs_fs_31 cs_bold cs_mb_20">
                                Welcome To Bhairaav's Loyalty Program!</h2>
                        </div>
                    </div>
                    <!-- <div class="cs_height_35 cs_height_lg_35"></div> -->
                    <p>
                        BHAIRAAV values you and your support. We believe there is no advertising that is superior to the brand
                        advocacy of our customers. As someone who has trusted us with building your home, your satisfaction,
                        happiness and delight is supremely important to us. And as a token of appreciation, we would like to
                        introduce you to the BHAIRAAV's Loyalty and Referral program.
                    </p>
                    <p>
                        Should you feel the need to consider a second (or maybe even a third) real estate investment, you need to
                        look no further. With multiple world-class developments panning the length and breadth of Mumbai & Navi
                        Mumbai, Bhairaav has something for everyone. From inspiring sea-view residences to the best integrated
                        office spaces, everything you will ever need in real estate is just a call away.
                    </p>
                    <p>
                        Do you have A friend or a family member looking to buy a home or office? What better advice can you give, than
                        referring them to a Bhairaav property! They too will benefit from the expertise, trust, appreciation
                        and of course, the thoughtfulness of Bhairaav.
                    </p>
                    <p>
                        We have fabulous referral rewards for both, you and your friends and family! But the best reward you will
                        get is the gratitude and happiness that your friends and family will shower on you for helping them choose a
                        Bhairaav property.
                    </p>
                    <p>
                        Welcome to a world of happiness, welcome to your very own loyalty program.
                    </p>
                    <p>
                        As a member, you can enjoy a host of promotion offers and privileges, all of them crafted
                        specifically for your requirement.
                    </p>
                    <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec">
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
                            Invitation for special preview of our new projects
                        </li>
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
                            Enjoy top priority in case of any special offers, events and promotions
                        </li>
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
                            An opportunity to be a part of a unique reward program
                        </li>
                    </ul>

                </div>
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
                The program has been designed exclusively for our members. All you have to do is recommend us to any of your
                friends, members of your family or colleagues. If any of them books a Bhairaav property, you and the person
                recommended, will be rewarded!
            </p>
            <h2 class="cs_fs_21 cs_bold cs_white_color mb-3">
                What If I Want To Buy Another Property With Bhairaav?
            </h2>
            <p class="cs_white_color mb-3">
                We will be happy to welcome you back! The Bhairaav loyalty program also rewards customers who choose to
                re-invest with us. Never before offers at never-before prices are waiting for you!
            </p>
            <h2 class="cs_fs_21 cs_bold cs_white_color mb-3">
                How Do I Refer?
            </h2>
            <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec-2">
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
                    <strong>Step 1 :</strong>
                    Fill up the form, provide the name, email address and mobile number of your
                    friend or family member who wishes to buy a home.
                </li>
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
                    <strong>Step 2 :</strong>
                    We will speak to your friends and family and introduce them to the world of
                    Bhairaav. We will also not forget to inform them that since they have been
                    referred by an existing Bhairaav customer, they have some very special benefits!
                </li>
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
                    <strong>Step 3 :</strong>
                    Once the person you have referred buys a property with us, you get rewarded too!
                </li>
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
