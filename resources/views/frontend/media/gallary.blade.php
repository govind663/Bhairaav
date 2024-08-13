@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Awards & Accolades
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/161896.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Awards & Accolades</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Gallery Section -->
    <section class="awards-sec">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_grid_style_2 cs_lightgallery awards_grid_sec">
                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-01.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-01.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Samaj Ratna</h2>
                            <p class="awards_para-sec">
                                SHRI MADAN JAIN being conferred with <b>“SAMAJ RATNA”</b> at the hands of her
                                excellency Smt.Pratibhatai Patil, President of India on 13th March, 2012, at Rajbhavan,
                                Mumbai.
                            </p>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-01.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-02.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-02.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Jain Samaj Ratna</h2>
                            <p class="awards_para-sec">
                                On the occassion of Mahavir Jayanti, SHRI MADAN JAIN being conferred
                                with <b>“JAIN SAMAJ RATNA”</b> at the hands of Chief Minister of Maharashtra Shri.
                                Prithviraj Chavan on 24th April, 2013.
                            </p>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-02.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-03.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-03.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Quality Excellence Award</h2>
                            <p class="awards_para-sec">
                                <b>“QUALITY EXCELLENCE AWARD”</b> 2015, conferred to Mis. Bhairaav
                                Group at the hands of honourable Housing Minister of Maharashtra,
                                Shri. Prakash Mehta being received by SHRI MADAN JAIN.
                            </p>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-03.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-04.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-04.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Mid-day Real Estate Icons Award</h2>
                            <p class="awards_para-sec">
                                Goldcrest residency <strong>iconic affordable luxury
                                homes</strong> Awarded With <strong>Mid-day real estate icons
                                award</strong>.
                            </p>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-04.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-05.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-05.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Corporate & Excellence Award</h2>
                            <p class="awards_para-sec">
                                Bhairaav Housing Corporation Limited Awarded with <strong>CORPORATE
                                &amp; EXCELLENCE AWARD</strong>
                            </p>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-05.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-06.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-06.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">Times Real Estate Icons Award 2017</h2>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-06.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-07.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-07.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">
                                Project Showcase - Bhairaav Housing Corporation Ltd.
                            </h2>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-07.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-08.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-08.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">
                                Media Coverage - Bhairaav Lifestyles
                            </h2>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-08.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-09.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-09.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">
                                A Luxurious Project That, Raises The Benchmark In Extraordinary Living
                            </h2>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-09.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

                <div class="cs_grid_item">
                    <a href="{{ asset('frontend/assets/img/awards/award-10.jpg') }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('frontend/assets/img/awards/award-10.jpg') }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">
                                Akkshay Jain's Interview With Ishq FM
                            </h2>
                        </div>
                        <img src="{{ asset('frontend/assets/img/awards/award-10.jpg') }}" alt="" class="d-none">
                    </a>
                </div>

            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Gallery Section -->
@endsection

@push('scripts')
@endpush
