@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Our Team
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/bg/15861.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Our Team</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    @foreach ($teams as $value)
    <section class="director_sec {{ $loop->iteration % 2 == 0 ? 'cs_golden_bg' : '' }}" id="ashika_director_sec" style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_row_gap_100 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_team cs_style_1">
                        <div class="cs_team_member_img cs_mb_lg_20 cs_radius_5 position-relative overflow-hidden">
                            <div class="lead__detail_img_sec">
                                <img src="{{ asset('/bhairaav/team_leader/profile_image/' . $value->profile_image ) }}" alt="{{ $value->name }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="cs_team cs_style_1">
                        <h2 class="cs_fs_38 cs_bold mb-0" style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">{{ $value->name }}</h2>
                        <p>{{ $value->designation }}</p>
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
@endsection

@push('scripts')
@endpush
