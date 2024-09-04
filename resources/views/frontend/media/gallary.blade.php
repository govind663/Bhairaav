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
                @foreach ($medias as $kay => $value)
                <div class="cs_grid_item">
                    <a href="{{ asset('/bhairaav/media/media_image/' . $value->media_image) }}" class="cs_gallery_item cs_style_3 cs_lightbox_item d-block cs_bg_filed position-relative cs_awards_area" data-src="{{ asset('/bhairaav/media/media_image/'. $value->media_image) }}">
                        <div class="cs_gallery_item_hover awards_gallery_item_hover">
                            <h2 class="cs_post_title cs_fs_21 cs_bold cs_mb_10">{{ $value->media_name }}</h2>
                            <p class="awards_para-sec text-justify">
                                {!! $value->media_dec !!}
                            </p>
                        </div>
                        <img src="{{ asset('/bhairaav/media/media_image/'. $value->media_image) }}" alt="" class="d-none">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Gallery Section -->
@endsection

@push('scripts')
@endpush
