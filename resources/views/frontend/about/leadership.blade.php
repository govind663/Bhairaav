@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Leadership
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/bg/leadership-bg.webp') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Our Leaders</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->


    <!-- Start Team Section -->
    <section class="chairman_sec" id="chairman_sec">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_row_gap_100">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_team cs_style_1">
                        <div class="cs_team_member_img cs_mb_lg_20 ld_radius_5 position-relative overflow-hidden">
                            <div class="lead__detail_img_sec">
                                <img src="{{ asset('frontend/assets/img/testimonial/dumm-img.png') }}" alt="Team Member">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="cs_team cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-0">Shri Madan Jain</h2>
                        <p>Chairman</p>
                    </div>
                    <div class="ls_para_sec">
                        <p class="text-justify">
                            A foresighted and a humble gentleman with a sharp Business acumen, Shri Madan Jain, is the Founder &
                            Chairman of Bhairaav Group. Since 1969, the incorporation year of Bhairaav Group, due to his most able
                            leadership values he has constantly upgraded the systems to match the modernity in all the business arms
                            of the Enterprise. As the group ventured into Real Estate Industry a decade ago, which was again a
                            brainchild of Shri Madan Jain, the Group acquired The Western India Spinning & Weaving Mills Ltd.' at
                            Lalbaug - Parel , by a bidding process for a Textile Mill Land Tender. This is where the Group's most
                            prestigious project 'Muthaliya Residency' stands today.
                        </p>
                        <p class="text-justify">
                            On the Social front also he has been very active. His selfless attitude has earned him the following
                            honors, amongst many other achievements.
                        </p>

                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0">
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
                                For his consistent work towards the Society, he was Awarded again as a 'Samaj Ratna' at the hands of
                                Shri Prithviraj Chauhan, former Chief Minister of Maharashtra on Maha Vir Jayanti Day in the year 2013.
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
                                Awarded as a 'Samaj Ratna' in the year 2012 from the hands of our immediate past President Smt. Pratibhatai Patil.
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
                                In the year 1997 he has been conferred with the title of 'Sanghvi' , in Jainism this is the highest
                                honor to be bestowed upon a Jain.
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
                                Has been appointed as a Member on the Earthquake Relief Committee by the Government of
                                Maharashtra.
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
                                Founder & Chief Patron of JITO (Jain International Trade Organisation).
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
                                Is on the Executive Council of Bharat Jain Mahamandal.
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
                                Is a patron member of Bhagwan Mahavir Hospital at Sumerpur , Rajasthan .
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
                                Designated as a 'Special Executive Officer' by the Government of Maharashtra.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>

    <section class="cs_golden_bg" id="managing_director">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_row_gap_100 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_team cs_style_1">
                        <div class="cs_team_member_img cs_mb_lg_20 ld_radius_5 position-relative overflow-hidden">
                            <div class="lead__detail_img_sec">
                                <img src="{{ asset('frontend/assets/img/testimonial/dumm-img.png') }}" alt="Team Member">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="cs_team cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-0 cs_white_color">Shri Viivek Jain</h2>
                        <p class="cs_white_color">Managing Director</p>
                    </div>
                    <div class="ls_para_sec">
                        <p class="text-justify cs_white_color">
                            Shri Viivek Jain, the Managing Director of the Group is a Commerce
                            Graduate from Mumbai University and has done his management program. He began his career at a very young
                            age, when still in college, handling major aspects of both the businesses the Group was involved in and
                            very rapidly picked up the finest nuances of successfully managing a huge Business House. His vision has
                            helped the company grow at a rapid pace with systems and values in perfect place. A dynamic entrepreneur
                            has an endeavour to create ultra-modern residential townships & business hubs to match quality lifestyle,
                            he works non-stop to transform his realty vision into reality. His meticulous working style, an eye for
                            details, and firm grip on all aspects of Real Estate Industry makes him a true leader at the
                            helm.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>

    <section id="executive_director">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_row_gap_100">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_team cs_style_1">
                        <div class="cs_team_member_img cs_mb_lg_20 ld_radius_5 position-relative overflow-hidden">
                            <div class="lead__detail_img_sec">
                                <img src="{{ asset('frontend/assets/img/testimonial/dumm-img.png') }}" alt="Team Member">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="cs_team cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-0">Shri Akkshay Jain</h2>
                        <p>Executive Director</p>
                    </div>

                    <!-- <div class="cs_team cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-0">Shri Akkshay Jain</h2>
                        <p>Executive Director</p>
                    </div> -->

                    <div class="ls_para_sec">
                        <p class="mb-0 text-justify">
                            Shri Akkshay Jain, the Director of the Group is a Commerce Graduate from Mumbai University
                            and a Law Graduate from the prestigious Lala Lajpatrai College, Mumbai. Apart from handling the legal
                            aspects of Real Estate Division he also has a good knowledge of minute property matters including
                            representation to the appropriate Authorities. He also possesses good working knowledge of specific rules
                            and enactments pertaining to the Industry. In his capacity as Director of Bhairaav Group, he also handles
                            and assures the smooth functioning and regular up-gradation of other departments. Despite being very soft
                            spoken, his silence speaks volumes. His very techno-savvy nature and flair for latest technology is the
                            main motivation behind the effective systems in the company.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Team Section -->
@endsection

@push('scripts')
@endpush
