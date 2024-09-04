@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Who We Are
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/about/2150322085.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Who We Are</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <div class="col-lg-6">
                    <div class="cs_pr_110 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <img src="{{ asset('frontend/assets/img/about/ak_648_455877381-1600672668_700x700.jpeg') }}" alt="Service" class="cs_radius_5">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                Overview
                            </p>
                            <h2 class="cs_fs_50 cs_bold mb-0">The Journey</h2>
                        </div>
                    </div>
                    <div class="cs_height_35 cs_height_lg_35"></div>
                    <p>
                        Mr. Shri. Madan Jain through his dynamism as an entrepreneur established Bhairaav Group in the year 1972. In
                        his initial years as a businessman, he had a largely successful stint in the garment industry. Later on,
                        21st the year saw the group diversifying into real estate, foraying into building a robust portfolio of
                        world-class residential and commercial realty.
                    </p>
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                - Member of -
                            </p>
                        </div>
                    </div>
                    <div class="member-sec">
                        <img src="{{ asset('frontend/assets/img/about/banm.png') }}" />
                        <img src="{{ asset('frontend/assets/img/about/creadai.png') }}" />
                        <img src="{{ asset('frontend/assets/img/about/images.jpeg') }}" />
                    </div>
                </div>
            </div>
            <div class="cs_height_80 cs_height_lg_40"></div>

            <div class="overflow-hidden">
                <ul class="cs_about_feature_list_1 cs_mp_0">
                    <li class="text-center">
                        <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">20</h3>
                        <h3 class="cs_fs_21 mb-0">Years of experience </h3>
                    </li>
                    <li class="text-center">
                        <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">1.5 Million sq.ft.
                        </h3>
                        <h3 class="cs_fs_21 mb-0">Established Creations </h3>
                    </li>
                    <li class="text-center">
                        <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">5 Million + sq.ft.</h3>
                        <h3 class="cs_fs_21 mb-0">Ongoing & Upcoming Projects</h3>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Servide Section -->

    <!-- Start Feature Section -->
    <section class="container-fluid p-0 cs_blue_bg">
        <div class="container">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-lg-6">
                    <div class="cs_image_layer cs_style_2 position-relative cs_bg_filed cs_width_left_50_vw"
                        data-src="{{ asset('frontend/assets/img/about/448318808_1.jpg') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_pl_110">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_fs_38 cs_bold cs_mb_18 cs_white_color">The Progress</h2>
                            <p class="mb-0 cs_white_color text-justify">
                                Since inception the company has grown multi-fold and flourished over the years through
                                sheer hard work, dedication and commitment to quality. By clinching numerous strategic
                                land deals and delivering several multi-storied apartments comprising contemporary
                                world-class amenities, Bhairaav Group crafts lifestyles and life-spaces that suit contemporary
                                times. Bhairaav Housing Corporation Limited , the Realty Division of the Bhairaav Group is
                                acknowledged for high quality construction and transparency in dealings, the group is steadily forging
                                ahead to create its own niche in the Real Estate Industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_10 cs_height_lg_10"></div>
        <div class="container">
            <div class="row align-items-center cs_mobile_reverse cs_gap_y_40">
                <div class="col-lg-6">
                    <div class="cs_pr_110">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_fs_38 cs_bold cs_mb_18 cs_white_color">The Legacy</h2>
                            <p class="mb-0 cs_white_color text-justify">
                                Bhairaav Group will be celebrating its 52<sup>nd</sup> year of existence
                                in the year 2024. The group ventured into real estate in the year 1997
                                under the able guidance of Chairman Shri Madan Jain. Since then dedication,
                                reliability, commitment and quality have been the four core values of the group.
                                The group has constructed several multi-storied contemporary structures with
                                high-class amenities to suit modern needs of life in sync with its signature line -
                                better lifestyle, better life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_image_layer cs_style_2 position-relative cs_bg_filed cs_width_right_50_vw"
                        data-src="{{ asset('frontend/assets/img/about/2150456255.jpg') }}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Start Feature Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="cs_slider cs_style_1 cs_slider_gap_30 cs_show_shadow_20">
            <div class="container">
                <div class="cs_section_heading_wrap_1">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase wow fadeInLeft"
                            data-wow-duration="0.8s" data-wow-delay="0.2s">Strengths</p>
                        <h2 class="cs_fs_50 cs_bold mb-0">Our Strengths</h2>
                    </div>
                    <div class="cs_slider_arrows cs_style_4">
                        <div class="cs_left_arrow slick-arrow cs_center">
                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </div>
                        <div class="cs_right_arrow slick-arrow cs_center">
                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_height_80 cs_height_lg_50"></div>
                <div class="cs_full_width_right">
                    <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600"
                        data-center="0" data-variable-width="1" data-slides-per-view="responsive" data-xs-slides="1"
                        data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
                        <div class="cs_slider_wrapper">
                            <div class="cs_slide">
                                <div class="cs_iconbox cs_style_3 cs_radius_5 cs_white_bg">
                                    <div class="cs_iconbox_icon cs_mb_29 cs_center cs_radius_5 cs_white_bg">
                                        <img src="{{ asset('frontend/assets/img/about/icon/searching.png') }}" alt="Icon">
                                    </div>
                                    <h3 class="cs_iconbox_title cs_mb_19 cs_fs_36 cs_bold">Vision</h3>
                                    <div class="cs_iconbox_subtitle mb-0 more text-justify">
                                        <ul class="cs_list cs_style_1 cs_mp_0">
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_95_13)">
                                                        <path
                                                            d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_95_13">
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                We are committed to our customers by providing high class Residential & Commercial spaces
                                                with lifestyle amentities, top class quality & timely possession, thereby elevating their
                                                values and lifestyles.
                                            </li>
                                            <li><svg width="25" height="25" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_95_13)">
                                                        <path
                                                            d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_95_13">
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                We pride ourselves at being the preferred choice for prospective
                                                customers.
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- We are dedicated to delivering exceptional Residential & Commercial spaces, complete with lifestyle amenities, top-notch quality, and timely possession, thereby enhancing our customers' values and lifestyles.<br>We take pride in being the go-to choice for discerning customers, exceeding their expectations and building long-lasting relationships.</p> -->
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_iconbox cs_style_3 cs_radius_5 cs_white_bg">
                                    <div class="cs_iconbox_icon cs_mb_29 cs_center cs_radius_5 cs_white_bg">
                                        <img src="{{ asset('frontend/assets/img/about/icon/mission.png') }}" alt="Icon">
                                    </div>
                                    <h3 class="cs_iconbox_title cs_mb_19 cs_fs_36 cs_bold">Mission</h3>
                                    <div class="cs_iconbox_subtitle mb-0 more text-justify">
                                        <ul class="cs_list cs_style_1 cs_mp_0">
                                            <li><svg width="25" height="25" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_95_13)">
                                                        <path
                                                            d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_95_13">
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>Design living spaces in tune with lifestyle of customers</li>
                                            <li><svg width="25" height="25" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_95_13)">
                                                        <path
                                                            d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_95_13">
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Emerge as a premium brand to reckon with
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Constantly innovate and expand creative repertoire through
                                                meticulous planning and move with changing trends
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Carve landmark projects in residential and commercial arenas
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_95_13)">
                                                        <path
                                                            d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                            fill="currentColor">
                                                        </path>
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_95_13">
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Institutionalize transparent and upfront dealing
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Involve and evolve our core asset and partners in progress -
                                                employees
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Constantly elevate standards and create benchmark in real estate
                                                field
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_iconbox cs_style_3 cs_radius_5 cs_white_bg">
                                    <div class="cs_iconbox_icon cs_mb_29 cs_center cs_radius_5 cs_white_bg">
                                        <img src="{{ asset('frontend/assets/img/about/icon/value.png') }}" alt="Icon">
                                    </div>
                                    <h3 class="cs_iconbox_title cs_mb_19 cs_fs_36 cs_bold">Values</h3>
                                    <div class="cs_iconbox_subtitle mb-0 more text-justify">
                                        <ul class="cs_list cs_style_1 cs_mp_0">
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Professionalism For us it symbolizes consistency in quality, as
                                                quality is remembered long after the price is forgotten.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_iconbox cs_style_3 cs_radius_5 cs_white_bg">
                                    <div class="cs_iconbox_icon cs_mb_29 cs_center cs_radius_5 cs_white_bg">
                                        <img src="{{ asset('frontend/assets/img/about/icon/quality.png') }}" alt="Icon">
                                    </div>
                                    <h3 class="cs_iconbox_title cs_mb_19 cs_fs_36 cs_bold">Quality</h3>
                                    <div class="cs_iconbox_subtitle mb-0 more text-justify">
                                        <ul class="cs_list cs_style_1 cs_mp_0">
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
                                                As a working system, we do not accept anything but the best - the
                                                resultant is quality.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_iconbox cs_style_3 cs_radius_5 cs_white_bg">
                                    <div class="cs_iconbox_icon cs_mb_29 cs_center cs_radius_5 cs_white_bg">
                                        <img src="{{ asset('frontend/assets/img/about/icon/idea.png') }}" alt="Icon">
                                    </div>
                                    <h3 class="cs_iconbox_title cs_mb_19 cs_fs_36 cs_bold">Innovation</h3>
                                    <div class="cs_iconbox_subtitle mb-0 more text-justify">
                                        <ul class="cs_list cs_style_1 cs_mp_0">
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
                                                            <rect width="25" height="25" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Our Endeavour is to constantly innovate and improvise our designs, product, layout,
                                                processes, and procedures so as to deliver improved product with timely possession.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Feature Section -->

    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/about/2149667853.jpg') }}">
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Room Details Section -->
    <section class="logo-info">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-lg-6 text-justify">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <h2 class="cs_fs_50 cs_bold mb-3">Our Logo</h2>
                        </div>
                    </div>
                    <p>
                        The bird in the form of letter <b>'B'</b> is an ambassador, with unlimited vision & strong
                        commitment. The yellow colour symbolizes the purity of Gold. The flying bird demonstrates the
                        company, poised to soar to greater heights, stirred with a new vision and mighty wave of hope,
                        faith and delight.
                    </p>
                    <p>
                        The tall red blocks suggest the Realty aspect of the company. Vermillion (red) is a sacred colour
                        and symbolizing strength. It also stands for a brick, which is moulded from mother earth - the
                        true foundation for mankind's existence.
                    </p>
                    <p>
                        The baseline <b>Better Lifestyle. Better Life</b>, reflects the company's motto to craft art
                        destinations and thereby create world-class lifestyles for Mumbaites. It signifies the core
                        philosophy of the company – <b>in it's pursuit to emerge as a premium brand to reckon with and
                        be the better choice for it's clientele.</b>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <img src="{{ asset('frontend/assets/img/about/logo-info.png') }}" alt="Service" class="cs_radius_5">
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
@endsection

@push('scripts')
@endpush
