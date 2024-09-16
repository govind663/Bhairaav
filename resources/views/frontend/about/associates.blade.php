@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Associates
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/about/2150322085.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Associates</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_45">
                @foreach ($partners as $partner)
                <div class="col-lg-4">
                    <div class="cs_section_heading cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-10 ">
                            {{ $partner->name }}
                        </h2>
                    </div>
                    <ul class="cs_list cs_style_1 cs_mp_0">
                        @if(!empty($partner->partner_name))
                            @foreach(json_decode($partner->partner_name) as $key => $partnerNames)
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
                                    {{ $partnerNames }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="cs_height_80 cs_height_lg_40"></div>
    </section>
    <!-- End Servide Section -->

    <!-- Start Banking Partners -->
    <section class="partner-sec">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Partners
                </p>
                <h2 class="cs_fs_50 cs_bold mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    Our Banking Partners
                </h2>
            </div>
            <div class="cs_height_40 cs_height_lg_50"></div>
        </div>
        <div class="cs_slider cs_style_1 cs_slider_gap_60 cs_hover_show_arrows">
            <div class="container">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="5" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        @foreach ($backingPartners as $value)
                            <div class="cs_slide">
                                <img src="{{ asset('/bhairaav/bank_partner/bank_logo/' . $value->bank_logo ) }}" style="height:100px;">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
            </div>
            <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
                <div class="cs_left_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_right_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z"
                            fill="currentColor" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Banking Partners -->
@endsection

@push('scripts')
@endpush
