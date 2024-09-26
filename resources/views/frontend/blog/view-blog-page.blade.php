@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Blog Details
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/blog/bd-img-1.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Blog Details</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Blog Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_lg_80">
                <div class="col-lg-8">
                    <div class="bd_blog_details ">
                        <h2 class="cs_fs_38 cs_bold mb-10">
                            {{ $blog->blog_title }}
                        </h2>
                        {{-- <img src="{{ asset('/bhairaav/blog/blog_image/' . $blog->blog_image ) }}" alt="{{ $blog->blog_title }}"> --}}
                        {!! $blog->description !!}
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="cs_sidebar cs_right_sidebar bd_side_left">
                        <div class="cs_sidebar_item widget_search bd_search_item">
                            <h2 class="cs_fs_21 cs_bold cs_mb_8">Search</h2>
                            <form class="cs_sidebar_search" action="#">
                                <input type="text" placeholder="Looking for Something...">
                                <button class="cs_sidebar_search_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_658_659)">
                                            <path
                                                d="M17.7808 16.7198L13.3041 12.243C14.524 10.751 15.1239 8.84707 14.9795 6.92518C14.8351 5.00328 13.9575 3.2104 12.5283 1.91739C11.099 0.624387 9.22751 -0.0698265 7.3008 -0.0216526C5.37409 0.0265212 3.5396 0.813397 2.17678 2.17621C0.813961 3.53903 0.0270858 5.37352 -0.0210881 7.30024C-0.0692619 9.22695 0.624952 11.0985 1.91796 12.5277C3.21097 13.9569 5.00384 14.8345 6.92574 14.9789C8.84764 15.1233 10.7515 14.5235 12.2436 13.3035L16.7203 17.7803C16.8618 17.9169 17.0512 17.9925 17.2479 17.9908C17.4445 17.9891 17.6326 17.9102 17.7717 17.7711C17.9107 17.6321 17.9896 17.444 17.9913 17.2473C17.993 17.0507 17.9174 16.8612 17.7808 16.7198ZM7.50057 13.5C6.31388 13.5 5.15384 13.1481 4.16715 12.4888C3.18045 11.8295 2.41142 10.8925 1.95729 9.79611C1.50317 8.69975 1.38435 7.49335 1.61586 6.32946C1.84737 5.16558 2.41881 4.09648 3.25793 3.25736C4.09704 2.41825 5.16614 1.8468 6.33003 1.61529C7.49391 1.38378 8.70031 1.5026 9.79667 1.95673C10.893 2.41085 11.8301 3.17989 12.4894 4.16658C13.1487 5.15328 13.5006 6.31332 13.5006 7.5C13.4988 9.09076 12.8661 10.6158 11.7412 11.7407C10.6164 12.8655 9.09132 13.4982 7.50057 13.5Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_658_659">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="cs_sidebar_item widget_categories bd_categories_item">
                            <h2 class="cs_fs_21 cs_bold cs_mb_8">Categories</h2>
                            <ul>
                                @foreach($categoriesWithCount as $category)
                                    <li class="cat-item">
                                        <a href="#">{{ $category->category_name }} ({{ $category->post_count }})</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="cs_sidebar_item bd_latest_post_item">
                            <h2 class="cs_fs_21 cs_bold cs_mb_8">Latest post</h2>
                            <ul class="cs_recent_posts bd_list_area">
                                @foreach($latestPosts as $post)
                                    <li>
                                        <div class="cs_recent_post">
                                            <h3 class="cs_post_title cs_fs_16 cs_bold cs_mb_1">
                                                <a href="{{ route('frontend.blog.blog-details', $post->id) }}">{{ $post->blog_title }}</a>
                                            </h3>
                                            @php
                                                $date = \Carbon\Carbon::parse($post->posted_dt);
                                            @endphp
                                            <p class="cs_recent_post_date mb-0">{{ $date->format('M d, Y') }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="cs_sidebar_item widget_tag_cloud bd_tag_item">
                            <h2 class="cs_fs_21 cs_bold cs_mb_8">Popular tags</h2>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="#" class="tag-cloud-link">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Blog Section -->
@endsection

@push('scripts')
@endpush
