@extends('frontend.layouts.master')

@section('title')
Bhairaav | Blog
@endsection

@push('styles')
@endpush

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
    data-src="{{ asset('frontend/assets/img/bg/3051.jpg') }}">
    <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_67">Blog</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Blog Grid Section -->
<section>
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_row_gap_60 cs_gap_y_80">
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative' href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/0282680c-9e94-4551-9164-1aa0b3700e11.__CR31,0,300,300_PT0_SX300_V1___.jpg') }}" alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>3 Aug 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>Residential Apartments in Navi Mumbai endorse Smart Living</a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
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
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative' href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/State-of-the-art-commercial-projects-in-Navi-Mumbai-thumbnail.jpg') }}" alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>1 Feb 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>State-Of-The-Art Commercial Projects in Navi Mumbai</a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
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
                                            fill="currentColor"></path>
                                    </svg>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative' href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/Bhairaav-Signature-Beckons-You-to-Savour-an-Exciting-New-Lifestyle-thumbnail.jpg') }}"
                            alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>4 Sep 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>
                                Bhairaav Signature Beckons You to Savour an Exciting New Lifestyle
                            </a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
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
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                        href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/Avanta-Coworking-Space-in-Gurgaon-001.jpg') }}"
                            alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>3 Aug 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>
                                What You Should Be Looking For In An Office Space
                            </a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
                            <span>
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </i>
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative' href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/21.jpg') }}" alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>1 Feb 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>Bhairaav Signature – The Picture Perfect Homes
                            </a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
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
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative'
                        href='blog-details.html'>
                        <img src="{{ asset('frontend/assets/img/blog/Thumb_UnderstandingThe-New-age-way-of-life.jpg') }}"
                            alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <!-- <div class="cs_post_meta cs_mb_24">
                            <span>By Jenifar</span>
                            <span class="cs_post_meta_seperator"></span>
                            <span>4 Sep 2024</span>
                        </div> -->
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='blog-details.html'>Understanding The New-Age Way Of Life: Bhairaav Lifestyles
                            </a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='blog-details.html'>
                            Learn More
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
        <div class="text-center">
            <div class="cs_height_80 cs_height_lg_50"></div>
            <button class="cs_btn cs_style_2 cs_primary_btn cs_medium cs_radius_20 cs_fs_15">
                Learn More
            </button>
        </div>
    </div>
    <div class="cs_height_70 cs_height_lg_70"></div>
</section>
<!-- End Blog Grid Section -->
@endsection

@push('scripts')
@endpush
