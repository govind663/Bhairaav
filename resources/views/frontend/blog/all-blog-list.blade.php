@extends('frontend.layouts.master')

@section('title')
Bhairaav | Blog
@endsection

@push('styles')
<style>
    /* Custom Pagination Styles */
    .pagination {
        justify-content: center; /* Center pagination links */
        padding: 0;
        margin: 0;
    }

    .pagination .page-item {
        margin: 0 5px; /* Space between pagination items */
    }

    .pagination .page-link {
        border-radius: 5px; /* Rounded corners for pagination links */
        padding: 10px 15px; /* Padding inside pagination links */
        background-color: #f0f0f0; /* Background color */
        color: #333; /* Text color */
        border: 1px solid #ddd; /* Border around pagination links */
        transition: background-color 0.3s, color 0.3s; /* Smooth transition */
    }

    .pagination .page-link:hover {
        background-color: #0b18c9; /* Background color on hover */
        color: #fff; /* Text color on hover */
        border-color: #0b18c9; /* Border color on hover */
    }

    .pagination .page-item.active .page-link {
        background-color: #0b18c9; /* Active page background color */
        color: #fff; /* Active page text color */
        border-color: #0b18c9; /* Active page border color */
    }

    .pagination .page-item.disabled .page-link {
        background-color: #e9ecef; /* Disabled page background color */
        color: #6c757d; /* Disabled page text color */
        border-color: #e9ecef; /* Disabled page border color */
        cursor: not-allowed; /* Change cursor to not-allowed */
    }

    .pagination .page-link svg {
        vertical-align: middle; /* Align SVG icons vertically */
    }
</style>
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
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="cs_post cs_style_1 cs_size_1">
                    <a class='cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative' href='{{ route('frontend.blog.blog-details', ['id' => $blog->id] ) }}'>
                        <img src="{{ asset('/bhairaav/blog/blog_image/' . $blog->blog_image ) }}" alt="Feature">
                        <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
                    <div class="cs_post_info">
                        <h2 class="cs_post_title cs_fs_21 cs_bold">
                            <a href='{{ route('frontend.blog.blog-details', ['id' => $blog->id] ) }}'>{{ $blog->blog_title }}</a>
                        </h2>
                        <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='{{ route('frontend.blog.blog-details', ['id' => $blog->id] ) }}'>
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
            @endforeach
        </div>
        <!-- Pagination Links -->
        <div class="text-center">
            <div class="cs_height_80 cs_height_lg_50"></div>
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
        {{-- <div class="text-center">
            <div class="cs_height_80 cs_height_lg_50"></div>
            <button class="cs_btn cs_style_2 cs_primary_btn cs_medium cs_radius_20 cs_fs_15">
                Learn More
            </button>
        </div> --}}
    </div>
    <div class="cs_height_70 cs_height_lg_70"></div>
</section>
<!-- End Blog Grid Section -->
@endsection

@push('scripts')
@endpush
