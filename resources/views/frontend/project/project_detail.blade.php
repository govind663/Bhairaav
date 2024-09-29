@extends('frontend.layouts.master')

@section('title')
Bhairaav | Residental Projects
@endsection

@push('styles')
@endpush

@section('content')
<!-- Start Project Slider Section -->
<div class="position-relative cs_gallery_hover_show_nav">
    <div class="cs_gallery_slider_thumb_2 slick-slider">
        @if(!empty($bannerImages))
            @foreach(json_decode($bannerImages) as $key => $bannerImage)
                @if($bannerImage)
                <div class="cs_gallery_slider_thumb_item_2 cs_bg_filed" data-src="{{ asset('/bhairaav/project_details/banner_image/' . $bannerImage) }}"></div>
                @endif
            @endforeach
        @endif
    </div>
    <div class="cs_gallery_slider_nav_2_wrap">
        <div class="container position-relative cs_gallery_slider_nav_2_in">
            <div>
                <h1 class="cs_white_color mb-0 cs_fs_50 cs_bold">
                    {{-- Check null  --}}
                    {{ $projectNames->project_name ?? '' }}
                </h1>
                <p class="cs_white_color">
                    MahaRERA Registration No.:
                    @foreach($reraNumbers as $key => $value)
                        Phase - {{ $key+1 }}
                        {{ $value ?? '' }}
                    @endforeach
                    <br>
                    ({{ $projectDetail->project_link ?? '' }} )
                </p>
            </div>
            <div class="cs_gallery_slider_nav_2 slick-slider">
                @if(!empty($bannerImages))
                    @foreach(json_decode($bannerImages) as $key => $bannerImage)
                        <div class="cs_gallery_slider_thumb_mini_2 cs_bg_filed" data-src="{{ asset('/bhairaav/project_details/banner_image/' . $bannerImage) }}"></div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="cs_left_arrow_gallery_2 cs_center cs_mobile_hide">
        <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z"
                fill="currentColor">
            </path>
        </svg>
    </div>
    <div class="cs_right_arrow_gallery_2 cs_center cs_mobile_hide">
        <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z"
                fill="currentColor">
            </path>
        </svg>
    </div>
</div>
<!-- End Project Slider Section -->

<!-- Start Project Hallmarks Section -->
<section class="cs_gray_bg">
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="container">
        <div class="row align-items-center cs_gap_y_45 ">
            <div class="col-lg-6">
                <div class="cs_pr_110 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <img src="{{ $projectDetail->overview_image ? asset('/bhairaav/project_details/overview_image/' . $projectDetail->overview_image) : '' }}" alt="{{ $projectDetail->overview_image }}" class="cs_radius_5">
                </div>
            </div>
            <div class="col-lg-6">
                {!! $projectDetail->project_description ?? '' !!}
            </div>
        </div>
        <div class="cs_height_35 cs_height_lg_35"></div>

        <div class="project-hallmarks-sec">
            <h2 class="cs_fs_28 cs_bold mb-10">Project Hallmarks</h2>

            <div class="row">
                @if(!empty($projectHallmarks))
                    @foreach($projectHallmarks as $key => $hallmark)
                        <div class="col-lg-4">
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
                                    {{ $hallmark->hallmarks }}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="cs_height_70 cs_height_lg_70"></div>
</section>
<!-- End Project Hallmarks Section -->

<!-- Start Location Advantages Section -->
<section class="container-fluid p-0 cs_blue_bg">
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_mobile_reverse cs_gap_y_20">
            <div class="cs_pr_110">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase cs_white_color wow fadeInLeft"
                        data-wow-duration="0.8s" data-wow-delay="0.2s"
                        style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        Location Advantages
                    </p>
                    <h2 class="cs_fs_38 cs_bold cs_mb_18 cs_white_color">
                        {{ $projectDetail->location_advantages_title ?? '' }}
                    </h2>
                </div>
            </div>

            @if(!empty($locationAdvantages))
                <div class="col-lg-6">
                    <div class="loc-adv-sec">
                        <div class="loc-adv-img-sec">
                            <img src="{{ asset('frontend/assets/img/icons/connectivity.png') }}" alt="">
                        </div>
                        <div class="loc-adv-con-sec">
                            <h3 class="cs_post_title cs_fs_21 cs_bold cs_mb_1 cs_white_color">Supreme Connectivity</h3>
                        </div>
                    </div>
                    <div class="loc-adv-list-sec">
                        <ul>
                            @foreach($locationAdvantages as $index => $locationAdvantage)
                                @if ($locationAdvantage->location_advantage_id == 1)
                                    <li>
                                        {{ $locationAdvantage->feature_value }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="loc-adv-sec">
                        <div class="loc-adv-img-sec">
                            <img src="{{ asset('frontend/assets/img/icons/locator.png') }}" alt="">
                        </div>
                        <div class="loc-adv-con-sec">
                            <h3 class="cs_post_title cs_fs_21 cs_bold cs_mb_1 cs_white_color">
                                Proximity To It Hubs & Major Landmarks
                            </h3>
                        </div>
                    </div>
                    <div class="loc-adv-list-sec">
                        <ul>
                            @foreach($locationAdvantages as $index => $locationAdvantage)
                                @if ($locationAdvantage->location_advantage_id == 2)
                                    <li>
                                        {{ $locationAdvantage->feature_value }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="loc-adv-sec">
                        <div class="loc-adv-img-sec">
                            <img src="{{ asset('frontend/assets/img/icons/map-pin.png') }}" alt="">
                        </div>
                        <div class="loc-adv-con-sec">
                            <h3 class="cs_post_title cs_fs_21 cs_bold cs_mb_1 cs_white_color">
                                Site Address
                            </h3>
                        </div>
                    </div>
                    <div class="loc-adv-list-sec">
                        <ul>
                            @foreach($locationAdvantages as $index => $locationAdvantage)
                                @if ($locationAdvantage->location_advantage_id == 3)
                                    <li>
                                        {{ $locationAdvantage->feature_value }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <a class="cs_btn cs_style_2 cs_white_btn cs_medium cs_radius_20 cs_fs_15" href="tel:+919071056755">
                            +91-9071056755
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
                        </a>
                        <a class="cs_btn cs_style_2 cs_white_btn cs_medium cs_radius_20 cs_fs_15" href="#">
                            Book A Site Visit
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
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="cs_height_70 cs_height_lg_70"></div>
</section>
<!-- End Location Advantages Section -->

<!-- Amenities Features Section -->
<section class="amenities-features-sec cs_primary_bg">
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_8 cs_mb_lg_15 text-uppercase">
                Amenities & Features
            </p>
            <h2 class="cs_fs_38 cs_bold mb-0 wow fadeInUp cs_white_color" data-wow-duration="0.8s" data-wow-delay="0.2s"
                style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
                {{ $projectDetail->amenities_title ?? '' }}
            </h2>
        </div>
        <div class="cs_height_50 cs_height_lg_50"></div>
    </div>
    <div class="container">

        <div class="row cs_row_gap_80 cs_gap_y_30">
            <ul class="cs_list cs_style_3 cs_mp_0">
                @if(!empty($projectAmenities))
                    @foreach($projectAmenities as $key => $amenity)
                        <li>
                            <img src="{{ asset('/bhairaav/project_details/amenity_images/' . $amenity->amenite_image) }}" alt="">{{  $amenity->amenite_image_name }}
                        </li>
                    @endforeach
                @endif
            </ul>


        </div>
    </div>
    <div class="cs_height_70 cs_height_lg_70"></div>
</section>
<!-- Amenities Features Section -->

<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/pp/1.jpg') }}">
</section>
<!-- End Page Heading Section -->

<!-- Start Property Gallary Section -->
<section>
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_8 cs_mb_lg_15 text-uppercase">Gallery</p>
            <h2 class="cs_fs_50 cs_bold mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
                {{ $projectDetail->gallery_title ?? '' }}
            </h2>
        </div>
        <div class="cs_height_50 cs_height_lg_50"></div>
    </div>
    <div class="cs_slider cs_style_1 cs_slider_gap_60 cs_hover_show_arrows">
        <div class="container">
            <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                <div class="cs_slider_wrapper cs_lightgallery project-details">
                    @if(!empty($projectAmenities))
                        @foreach($projectGallery as $index => $gallery)
                            <div class="cs_slide">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="cs_gallery_item cs_style_3 d-block cs_bg_filed position-relative" data-src="{{ asset('/bhairaav/project_details/gallery_image/' . $gallery->gallery_image) }}">
                                    <div class="cs_gallery_item_hover cs_primary_font cs_fs_38">
                                        <span class="cs_hover_icon cs_accent_color">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(.clip0_441_197)">
                                                    <path
                                                        d="M5.21698 26.9937C6.24727 26.9937 7.26819 26.9843 8.29847 26.9937C8.99157 27.003 9.46925 27.3402 9.66594 27.9396C10.0219 29.0261 9.37559 29.9721 8.24227 29.9721C6.19107 29.9815 4.14924 29.9721 2.09803 29.9721C1.86388 29.9721 1.62972 30.0002 1.39557 29.9815C0.524508 29.9065 0 29.3165 0 28.4454C0.00936622 26.235 0.00936622 24.0246 0.0187324 21.8141C0.0187324 21.0367 0.337184 20.5403 0.964721 20.3343C2.04184 19.969 2.98782 20.6246 2.99719 21.7579C3.00656 22.6571 2.99719 23.5563 2.99719 24.4648C2.99719 24.5772 2.99719 24.6896 2.99719 24.802C3.05339 24.8394 3.10022 24.8769 3.15642 24.9237C3.21261 24.8113 3.25008 24.6708 3.33437 24.5865C4.86107 23.0505 6.38776 21.5238 7.92382 19.9877C8.33594 19.5756 8.82298 19.3976 9.39432 19.5756C9.96566 19.7536 10.3309 20.1469 10.4621 20.7277C10.5838 21.299 10.359 21.7486 9.95629 22.1419C8.44833 23.6405 6.94037 25.1579 5.43241 26.6565C5.33875 26.7501 5.21698 26.797 5.10459 26.8719C5.15142 26.9094 5.18889 26.9562 5.21698 26.9937Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M5.32939 2.99719C6.10679 3.82142 6.88419 4.66438 7.68968 5.47924C8.42025 6.21917 9.17891 6.94037 9.91884 7.67093C10.7243 8.4577 10.6962 9.40368 9.85328 10.1342C9.4318 10.4995 8.52327 10.434 8.03623 9.97502C7.51172 9.48798 7.01531 8.9822 6.50017 8.4858C5.45115 7.44614 4.40214 6.41586 3.34375 5.38558C3.25946 5.30128 3.1658 5.21698 3.00657 5.05776C3.00657 5.52607 3.00657 5.91008 3.00657 6.2941C3.00657 6.94973 3.01594 7.60537 3.00657 8.26101C2.98784 9.18826 2.4165 9.75023 1.50798 9.75023C0.599453 9.74087 0.0281133 9.17889 0.0281133 8.24227C0.0187471 6.1817 0.0281133 4.12114 0.0281133 2.06057C0.0281133 1.82641 1.46348e-05 1.59226 0.0281133 1.3581C0.112409 0.505776 0.702481 0 1.55481 0C3.76523 0.00936622 5.97566 0.00936622 8.19546 0.0187324C8.97285 0.0187324 9.4599 0.34655 9.67532 0.964721C10.0312 2.04184 9.38497 2.97846 8.25165 2.99719C7.2682 3.00656 6.28475 3.00656 5.30129 3.00656C5.28256 3.01592 5.2732 3.02529 5.32939 2.99719Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M24.6706 3.00666C23.9681 3.00666 23.1814 3.00666 22.404 3.00666C22.1979 3.00666 21.9825 3.00666 21.7765 3.00666C20.8211 2.98793 20.2591 2.42595 20.2591 1.4987C20.2685 0.590175 20.8305 0.0282022 21.7671 0.0188359C23.8183 0.00946973 25.8601 0.0188359 27.9113 0.0188359C28.1455 0.0188359 28.3796 -0.00926271 28.6138 0.0188359C29.4755 0.103132 30 0.665105 30 1.5268C30 3.77469 29.9906 6.02258 29.9813 8.27048C29.9813 8.99167 29.6347 9.46935 29.0353 9.67541C27.9582 10.0313 27.0215 9.37569 27.0028 8.24238C26.9934 7.31512 27.0028 6.39723 27.0028 5.46998C27.0028 5.36695 27.0028 5.27328 27.0028 5.10469C26.881 5.20772 26.8061 5.25455 26.7499 5.31075C25.2232 6.80934 23.6684 8.28921 22.1698 9.8159C21.7577 10.2374 21.3362 10.4341 20.7743 10.3404C20.1748 10.2374 19.7814 9.8721 19.5848 9.31949C19.3787 8.74815 19.5379 8.23301 19.9594 7.81153C20.8398 6.94047 21.739 6.07878 22.61 5.19836C23.3125 4.47716 23.9869 3.72786 24.6706 3.00666Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M24.942 26.8438C24.5861 26.5253 24.2114 26.2256 23.8743 25.8884C22.6098 24.6146 21.3641 23.3408 20.109 22.0577C19.622 21.5613 19.5096 20.9524 19.7812 20.3811C20.0435 19.8285 20.6336 19.4632 21.2236 19.5007C21.6545 19.5288 21.9917 19.7442 22.2914 20.0439C23.7431 21.5332 25.2043 23.0224 26.6654 24.5116C26.7497 24.5959 26.8153 24.7083 26.8902 24.8113C26.9277 24.7926 26.9558 24.7645 26.9932 24.7458C26.9932 24.2119 26.9932 23.678 26.9932 23.1441C26.9932 22.629 26.9838 22.1139 27.0026 21.5987C27.04 20.7745 27.6301 20.25 28.4918 20.25C29.3441 20.25 29.9529 20.7839 29.9623 21.6081C29.981 23.5282 29.9717 25.4482 29.9717 27.3683C29.9717 27.7055 29.981 28.0427 29.9904 28.3892C30.0185 29.3352 29.391 30.0002 28.445 30.0002C26.2346 30.0002 24.0241 29.9908 21.8137 29.9815C21.0176 29.9815 20.5305 29.6537 20.3245 29.0074C19.9873 27.9396 20.6336 27.0218 21.7481 27.003C22.7784 26.9937 23.7993 27.003 24.8296 27.003C24.8671 26.9468 24.9045 26.9 24.942 26.8438Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath class="clip0_441_197">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="cs_hover_text cs_primary_font cs_primary_color cs_fs_21 cs_bold">
                                            {{ $gallery->gallery_image_name }}
                                        </span>
                                    </div>
                                    <img src="{{ asset('/bhairaav/project_details/gallery_image/' . $gallery->gallery_image) }}" alt="" class="d-none">
                                </a>
                            </div>
                        @endforeach
                    @endif
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
<!-- End Property Gallary Section -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- start report input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="staticBackdropLabel">
                    Enter your details to unlock
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body space-y-20 p-40">
                <!-- <h3>Register your interest</h3> -->
                <form method="POST" action="{{ route('frontend.properties-request.store') }}" class="cs_form cs_style_2" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                    <div class="col-sm-12 mb-3">
                        {{-- <label class="cs_height_16 cs_height_lg_16"><b>Full Name : <span class="text-danger">*</span></b></label> --}}
                        <input type="text" class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name *">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12 mb-3">
                        {{-- <label class="cs_height_16 cs_height_lg_16"><b>Email Id : <span class="text-danger">*</span></b></label> --}}
                        <input type="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email Id *">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12 mb-3">
                        {{-- <label class="cs_height_16 cs_height_lg_16"><b>Phone No. : <span class="text-danger">*</span></b></label> --}}
                        <input type="text" maxlength="10" class="cs_form_field_2 cs_radius_20 @error('phone_no') is-invalid @enderror" name="phone_no" id="phone_no" value="{{ old('phone_no') }}" placeholder="Phone No. *">
                        @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12 mb-3">
                        {{-- <label class="cs_height_16 cs_height_lg_16"><b>Subject : <span class="text-danger">*</span></b></label> --}}
                        <input type="text" class="cs_form_field_2 cs_radius_20 @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject *">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12 mb-3">
                        {{-- <label class="cs_height_16 cs_height_lg_16"><b>select Flat Type : <span class="text-danger">*</span></b></label> --}}
                        <select class="cs_form_field_2 cs_radius_20 @error('flat_type') is-invalid @enderror" name="flat_type" id="flat_type">
                            <option value="">Select Flat Type</option>
                            <option value="1" {{ old('flat_type') == '1' ? 'selected' : '' }}>1 BHK</option>
                            <option value="2" {{ old('flat_type') == '2' ? 'selected' : '' }}>2 BHK</option>
                            <option value="3" {{ old('flat_type') == '3' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('flat_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" type="submit">
                        <b>Submit</b>
                        <span>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                        </span>
                    </button>
                </form>
            </div><!-- end modal body -->
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('.cs_gallery_slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

@endpush
