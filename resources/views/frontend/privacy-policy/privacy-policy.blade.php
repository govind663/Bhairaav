@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Privacy Policy
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/24010.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Privacy Policy</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg text-justify">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <div class="col-lg-12">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <h2 class="cs_fs_50 cs_bold mb-0">Policy</h2>
                        </div>
                    </div>
                    <div class="cs_height_15 cs_height_lg_15"></div>
                    @if ($privacyPolicy)
                        <p>
                            {{ $privacyPolicy->introduction }}
                        </p>
                    @endif

                    <h4 class="cs_bold">
                        We May Collect And Process The Following Data About You:
                    </h4>
                    @if(!empty($privacyPolicy->data_collection))
                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec mb-4">
                            @foreach($privacyPolicy->data_collection as $data)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $data }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h4 class="cs_bold">
                        Use of the information
                    </h4>
                    <p>
                        We Use Information Held about You in the Following Ways:
                    </p>
                    @if(!empty($privacyPolicy->use_of_information))
                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec mb-4">
                            @foreach($privacyPolicy->use_of_information as $info)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $info }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h4 class="cs_bold">
                        Closure of your information
                    </h4>
                    @if(!empty($privacyPolicy->closure_of_information))
                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec mb-4">
                            @foreach($privacyPolicy->closure_of_information as $info)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $info }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h4 class="cs_bold">
                        We store your personal data
                    </h4>
                    @if(!empty($privacyPolicy->data_storage))
                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec mb-4">
                            @foreach($privacyPolicy->data_storage as $data)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $data }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h4 class="cs_bold">
                        Cookies
                    </h4>
                    @if(!empty($privacyPolicy))
                        <p>
                            {{ $privacyPolicy->cookies }}
                        </p>
                    @endif

                    <h4 class="cs_bold">
                        Our Rights
                    </h4>
                    @if(!empty($privacyPolicy->rights))
                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0 ref_list_sec mb-4">
                            @foreach($privacyPolicy->rights as $right)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $right }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <h4 class="cs_bold">
                        Changes to our privacy policy
                    </h4>
                    @if(!empty($privacyPolicy))
                        <p>
                            {{ $privacyPolicy->changing_privacy_policy }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Servide Section -->

@endsection

@push('scripts')
@endpush
