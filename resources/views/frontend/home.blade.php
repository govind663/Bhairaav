@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Home
@endsection

@push('styles')
@endpush

@section('content')
    {{-- Start Slider --}}
    <section>
        <div class="cs_parallax_slider loading overflow-hidden position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure
                            class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0"
                            data-src="{{ asset('frontend/assets/img/banner/milestone-2.jpg') }}"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <div class="cs_hero_text">
                                <p
                                    class="cs_hero_subtitle cs_white_color d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0"
                                        src="{{ asset('frontend/assets/img/icons/star.svg') }}" alt="Star">
                                    Office Spaces Starting at 665 sq. Ft.
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0"
                                        src="{{ asset('frontend/assets/img/icons/star.svg') }}" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_67 cs_white_color mb-0">
                                    Thane's Newest Tech Landmark
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure
                            class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0"
                            data-src="{{ asset('frontend/assets/img/banner/16769.jpg') }}"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <div class="cs_hero_text">
                                <p
                                    class="cs_hero_subtitle cs_white_color d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0"
                                        src="{{ asset('frontend/assets/img/icons/star.svg') }}" alt="Star">
                                    Welcome to Bhairaav Group
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0"
                                        src="{{ asset('frontend/assets/img/icons/star.svg') }}" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_67 cs_white_color mb-0">Invest in luxury for a<br />
                                    better lifestyle, better life
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#about" class="cs_down_btn_2"></a>
            <div class="cs_slider_navigation cs_white_color">
                <div class="cs_swiper_button_prev">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_swiper_button_next">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z"
                            fill="currentColor" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    {{-- End Slider --}}

    {{-- Start About --}}
    <section id="about">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container-fluid p-0 position-relative">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40">
                    <div class="col-lg-6">
                        <div class="cs_pr_110 about-us-sec">
                            <img src="{{ asset('frontend/assets/img/about/about-img.jpeg') }}" alt="About Us">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs_section_heading cs_style_1">
                            <div class="cs_section_heading">
                                <p
                                    class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                    Legacy of Excellence </p>
                                <h2 class="cs_fs_28 cs_bold cs_mb_8">Driven by a Mission to Deliver Superior Homes
                                    Ahead of Schedule. </h2>
                                <h2 class="cs_about_experience_text_1 cs_fs_50 cs_bold cs_accent_color">52+ Year
                                    Experience</h2>
                                <p class="cs_mb_16 cs_mb_lg_35">Our Chairman, Shri Madan Jain, founded Bhairaav Group
                                    in 1972. Following a successful career in the garment industry, he transitioned into
                                    the real estate sector. Today, Bhairaav Group has established a formidable
                                    reputation and is recognised as one of the most promising real estate developers in
                                    Mumbai and Navi Mumbai. Since its inception, the company has grown steadily and
                                    flourished through relentless hard work, dedication, and an unwavering commitment to
                                    quality.

                                </p>
                                <a class='cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15'
                                    href=''>
                                    <b>Learn More</b>
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
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_90 cs_height_lg_70"></div>
            <div class="container">
                <div class="cs_about cs_style_3">
                    <div class="overflow-hidden">
                        <ul class="cs_about_feature_list_1 cs_mp_0">
                            <li class="text-center">
                                <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">02</h3>
                                <h3 class="cs_fs_21 mb-0">Decades of Experience</h3>
                            </li>
                            <li class="text-center">
                                <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">1.5 Million sq.ft. </h3>
                                <h3 class="cs_fs_21 mb-0">Established Creations</h3>
                            </li>
                            <li class="text-center">
                                <h3 class="cs_fs_38 cs_bold main-counter cs_mb_9">5 Million + sq.ft.</h3>
                                <h3 class="cs_fs_21 mb-0">Ongoing & Upcoming
                                    Projects</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    {{-- End About --}}

    <!-- Start Rooms Section -->
    <section class="cs_primary_bg">
        <div class="cs_height_70 cs_height_lg_75"></div>
        <div class="cs_tabs cs_style_1">
            <div class="container-fluid cs_plr_100">
                <div class="cs_tabs_heading">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase cs_white_color wow fadeInLeft"
                            data-wow-duration="0.8s" data-wow-delay="0.2s">PROJECT LOCATIONS

                        </p>
                        <h2 class="cs_fs_50 cs_bold mb-0 cs_white_color">Ongoing Projects
                        </h2>
                    </div>
                    <ul class="cs_mp_0 cs_tab_links cs_style_1 cs_fs_15 cs_medium cs_white_color">
                        <li class="active"><a href="#tab_1">Ongoing </a></li>
                        <li><a href="#tab_2">Completed</a></li>
                    </ul>
                </div>
                <div class="cs_height_80 cs_height_lg_50"></div>
            </div>
            <div class="cs_tab_body">
                <div id="tab_1" class="cs_tab active">
                    <div class="container-fluid cs_plr_100">
                        <div class="row cs_row_gap_60 cs_gap_y_60">
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/overview-left.jpg') }}" alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/overview-left.jpg') }}" alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Bhairaav
                                                Milestone</a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Wagle Estate</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>MahaRERA: Phase I - P51700012365</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/img-02.jpg') }}" alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/img-02.jpg') }}" alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Jewel of
                                                Queen</a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Girgaum</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>MahaRERA No.: P51900013962</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/img-3.jpg') }}" alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/img-3.jpg') }}" alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Goldcrest
                                                Residency</a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Ghansoli</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>MahaRERA: Phase I - P51700012365</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_2" class="cs_tab ">
                    <div class="container-fluid cs_plr_100">
                        <div class="row cs_row_gap_60 cs_gap_y_60">
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/completed/Project-Photo-8-Bhairav-Darshan-Mumbai-5074840_1296_972.jpeg') }}"
                                            alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/completed/Project-Photo-8-Bhairav-Darshan-Mumbai-5074840_1296_972.jpeg') }}"
                                            alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Bhairaav
                                                Darshan</a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Elphinstone
                                                Road</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>Year Of Completion: 2003</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/completed/tn-bhairaav-parshwa-padma-project-flagship1.avif') }}"
                                            alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/completed/tn-bhairaav-parshwa-padma-project-flagship1.avif') }}"
                                            alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Parshwa Padma
                                            </a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Parel -
                                                Lalbaug</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>Year Of Completion: 2009</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cs_card cs_style_1 cs_color_1">
                                    <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg'
                                        href=''>
                                        <img src="{{ asset('frontend/assets/img/projects/completed/Project-Photo-10-The-Canvas-Residences-Mumbai-5239309_600_800_300_450.jpg') }}"
                                            alt="Room">
                                        <img src="{{ asset('frontend/assets/img/projects/completed/Project-Photo-10-The-Canvas-Residences-Mumbai-5239309_600_800_300_450.jpg') }}"
                                            alt="Room">
                                    </a>
                                    <div class="cs_card_info position-relative">
                                        <h2 class="cs_card_title cs_fs_38 cs_mb_4"><a href=''>Madhuban</a></h2>
                                        <div class="cs_card_price cs_mb_17">
                                            <span class="cs_accent_color cs_fs_16 cs_primary_font">Parel -
                                                Lalbaug</span>
                                        </div>
                                        <ul class="cs_card_list cs_mp_0">
                                            <li>Year Of Completion: 2007</li>
                                        </ul>
                                        <a class='cs_card_btn cs_center' href=''>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="projects-btn">
                <a class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" href="">
                    <b>Explore More</b>
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
                </a>
            </div>

        </div>
        <div class="cs_height_70 cs_height_lg_75"></div>
    </section>
    <!-- End Rooms Section -->

    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/projects/milestone-2.jpg') }}">
    </section>
    <!-- End Page Heading Section -->

    {{-- Start Background Image --}}
    <section class="container-fluid p-0">
        <div class="container">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-lg-6">
                    <div class="cs_image_layer cs_style_4 position-relative cs_bg_filed cs_width_left_50_vw"
                        data-src="{{ asset('frontend/assets/img/img-3.jpg') }}" style="background-image: url('frontend/assets/img/img-3.jpg');">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_pl_110">
                        <div class="cs_section_heading cs_style_1">
                            <p
                                class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                Why Choose Bhairaav</p>
                            <h2 class="cs_fs_38 cs_bold mb-10 ">Setting the Standard in Real Estate with Commitment to
                                Excellent Craftsmanship </h2>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Background Image --}}

    {{-- Start Testimonial --}}
    <section class="cs_white_bg cs_half_bg position-relative testimonial-sec">
        <div class="cs_half_bg_right cs_primary_bg"></div>
        <div class="cs_height_70 cs_height_lg_80"></div>
        <div class="container-fluid p-0 position-relative">
            <div class="cs_slider cs_style_1 cs_slider_gap_24">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cs_height_36 cs_height_lg_0"></div>
                            <div class="cs_section_heading cs_style_1">
                                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase cs_white_color wow fadeInLeft"
                                    data-wow-duration="0.8s" data-wow-delay="0.2s">CLIENTS FEEDBACK</p>
                                <h2 class="cs_fs_50 cs_bold mb-10 cs_white_color">Testimonials from Our Valued Clients
                                </h2>
                                <a class="cs_btn cs_style_2 cs_white_btn cs_medium cs_radius_20 cs_fs_15"
                                    href="/about">
                                    We Care
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
                                </a>
                            </div>
                            <div class="cs_height_0 cs_height_lg_50"></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600"
                                data-center="0" data-variable-width="0" data-slides-per-view="responsive"
                                data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2"
                                data-add-slides="2">
                                <div class="cs_slider_wrapper">
                                    <div class="cs_slide">
                                        <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                            <div class="cs_testimonial_avatar cs_mb_14">
                                                <img src="{{ asset('frontend/assets/img/testimonial/pramod.jpg') }}" alt="Avatar">
                                                <div class="cs_testimonial_avatar_right">
                                                    <h3 class="cs_fs_21 cs_bold mb-0">Mr. Pramod Bonde</h3>
                                                    <!-- <p class="mb-0">Hotel Guest</p> -->
                                                </div>
                                            </div>
                                            <blockquote
                                                class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_15">
                                                Recently
                                                booked 3.5 BHK flat in Goldcrest Residency Ghansoli. Breifing about
                                                project
                                                by staff is very good, very accommodative. Construction quality is also
                                                good. Overall project is good.</blockquote>
                                            <div class="cs_rating cs_green_color" data-rating="5">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="cs_rating_percentage">
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                </div>
                                            </div>
                                            <div class="cs_quote_icon">
                                                <svg width="37" height="31" viewBox="0 0 37 31"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_495_64)">
                                                        <path
                                                            d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_495_64">
                                                            <rect width="37" height="31" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs_slide">
                                        <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                            <div class="cs_testimonial_avatar cs_mb_14">
                                                <img src="{{ asset('frontend/assets/img/testimonial/rinky.jpg') }}" alt="Avatar">
                                                <div class="cs_testimonial_avatar_right">
                                                    <h3 class="cs_fs_21 cs_bold mb-0">Mrs. Rinky Juneja</h3>
                                                    <!-- <p class="mb-0">Hotel Guest</p> -->
                                                </div>
                                            </div>
                                            <blockquote
                                                class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_15">
                                                A very
                                                emotional moment,
                                                thank you Team Bhairaav for making it
                                                so special with the decoration and hospitality.
                                                Thank You again</blockquote>
                                            <div class="cs_rating cs_green_color" data-rating="5">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="cs_rating_percentage">
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                </div>
                                            </div>
                                            <div class="cs_quote_icon">
                                                <svg width="37" height="31" viewBox="0 0 37 31"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_495_64)">
                                                        <path
                                                            d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_495_64">
                                                            <rect width="37" height="31" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs_slide">
                                        <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                            <div class="cs_testimonial_avatar cs_mb_14">
                                                <img src="{{ asset('frontend/assets/img/testimonial/paresh.jpg') }}" alt="Avatar">
                                                <div class="cs_testimonial_avatar_right">
                                                    <h3 class="cs_fs_21 cs_bold mb-0">Mr.Paresh
                                                        Doyle</h3>
                                                    <!-- <p class="mb-0">Hotel Guest</p> -->
                                                </div>
                                            </div>
                                            <blockquote
                                                class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_15">
                                                Executives
                                                assist in getting home loan through various financial
                                                institutions and banks and assisting with all the aspects that go on in
                                                any
                                                real-estate deal. Project is occupied with all amenities like Club
                                                House,
                                                Swimming Pool, Jogging Track, etc. The flats are worth for the
                                                value.</blockquote>
                                            <div class="cs_rating cs_green_color" data-rating="5">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <div class="cs_rating_percentage">
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                </div>
                                            </div>
                                            <div class="cs_quote_icon">
                                                <svg width="37" height="31" viewBox="0 0 37 31"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(.clip0_495_64)">
                                                        <path
                                                            d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath class="clip0_495_64">
                                                            <rect width="37" height="31" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_pagination cs_style_1 cs_type_3"></div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_80"></div>
    </section>
    {{-- End Testimonial --}}

    {{-- Start NEWS & MEDIA --}}
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_8 cs_mb_lg_15 text-uppercase">
                    NEWS & MEDIA
                </p>
                <h2 class="cs_fs_50 cs_bold mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    Latest Updates
                </h2>
            </div>
            <div class="cs_height_50 cs_height_lg_50"></div>
        </div>
        <div class="cs_slider cs_style_1 cs_slider_gap_60 cs_hover_show_arrows">
            <div class="container">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                    data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                    data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                                    href='#'>
                                    <img src="{{ asset('frontend/assets/img/blog/0282680c-9e94-4551-9164-1aa0b3700e11.__CR31,0,300,300_PT0_SX300_V1___.jpg') }}"
                                        alt="Feature">
                                    <span
                                        class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <!-- <div class="cs_post_meta cs_mb_24">
                                        <span>By Admin</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>3 Aug 2024</span>
                                    </div> -->
                                    <h2 class="cs_post_title cs_fs_21 cs_bold">
                                        <a href='#'>Residential Apartments in Navi Mumbai endorse Smart
                                            Living</a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                                    href='#'>
                                    <img src="{{ asset('frontend/assets/img/blog/State-of-the-art-commercial-projects-in-Navi-Mumbai-thumbnail.jpg') }}"
                                        alt="Feature">
                                    <span
                                        class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <!-- <div class="cs_post_meta cs_mb_24">
                                        <span>By Admin</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>1 Feb 2024</span>
                                    </div> -->
                                    <h2 class="cs_post_title cs_fs_21 cs_bold">
                                        <a href='#'>State-Of-The-Art Commercial Projects in Navi Mumbai
                                        </a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                                    href='#'>
                                    <img src="{{ asset('frontend/assets/img/blog/Bhairaav-Signature-Beckons-You-to-Savour-an-Exciting-New-Lifestyle-thumbnail.jpg') }}"
                                        alt="Feature">
                                    <span
                                        class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <!-- <div class="cs_post_meta cs_mb_24">
                                        <span>By Admin</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>4 Sep 2024</span>
                                    </div> -->
                                    <h2 class="cs_post_title cs_fs_21 cs_bold">
                                        <a href='#'>Bhairaav Signature Beckons You to Savour an Exciting New
                                            Lifestyle
                                        </a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                                    href='#'>
                                    <img src="{{ asset('frontend/assets/img/blog/Avanta-Coworking-Space-in-Gurgaon-001.jpg') }}" alt="Feature">
                                    <span
                                        class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <!-- <div class="cs_post_meta cs_mb_24">
                                        <span>By Admin</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>3 Aug 2024</span>
                                    </div> -->
                                    <h2 class="cs_post_title cs_fs_21 cs_bold">
                                        <a href='#'>What You Should Be Looking For In An Office Space
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
                <div class="cs_left_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_right_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z"
                            fill="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
        </div>
        <div class="cs_height_60 cs_height_lg_30"></div>
    </section>
    {{-- End NEWS & MEDIA --}}
@endsection

@push('scripts')
<!-- Modal Js -->
<script>
    window.onload = () => {
        setTimeout(function() {
            $('#exampleModal').modal('show');
        }, 10000);
    }
</script>
@endpush
