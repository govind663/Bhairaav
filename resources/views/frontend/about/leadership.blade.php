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
    @foreach ($leader as $value)
        <section class="chairman_sec {{ $loop->iteration % 2 == 0 ? 'cs_golden_bg' : '' }}" id="chairman_sec" style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">
            <div class="cs_height_70 cs_height_lg_70"></div>
            <div class="container">
                <div class="row cs_row_gap_100">
                    <div class="col-lg-4 col-md-6">
                        <div class="cs_team cs_style_1">
                            <div class="cs_team_member_img cs_mb_lg_20 ld_radius_5 position-relative overflow-hidden">
                                <div class="lead__detail_img_sec">
                                    <img src="{{ asset('/bhairaav/leader/profile_image/' . $value->profile_image ) }}" alt="Team Member">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="cs_team cs_style_1">
                            <h2 class="cs_fs_38 cs_bold mb-0" style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">{{ $value->name }}</h2>
                            <p>
                                {{ $value->designation }}
                            </p>
                        </div>
                        <div class="ls_para_sec">
                            <p class="text-justify">
                                {!! $value->description !!}
                            </p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="cs_height_70 cs_height_lg_70"></div>
        </section>
    @endforeach
    <!-- End Team Section -->
@endsection

@push('scripts')
@endpush
