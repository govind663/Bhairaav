@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Leadership
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/leadership-bg.webp') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Our Leaders</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->


    <!-- Start Team Section -->
    @foreach ($leader as $leaders)
        <section class="chairman_sec {{ $loop->iteration % 2 == 0 ? 'cs_golden_bg' : '' }}" id="chairman_sec"
            style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">
            <div class="cs_height_70 cs_height_lg_70"></div>
            <div class="container">
                <div class="row cs_row_gap_100">
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="cs_team cs_style_1">
                            <div class="cs_team_member_img cs_mb_lg_20 ld_radius_5 position-relative overflow-hidden">
                                <div class="lead__detail_img_sec">
                                    <img src="{{ asset('/bhairaav/leader/profile_image/' . $leaders->profile_image) }}"
                                        alt="Team Member">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-12">
                        <div class="cs_team cs_style_1">
                            <h2 class="cs_fs_38 cs_bold mb-0"
                                style="{{ $loop->iteration % 2 == 0 ? 'color: white;' : '' }}">{{ $leaders->name }}</h2>
                            <p>
                                {{ $leaders->designation }}
                            </p>
                        </div>
                        <div class="ls_para_sec">
                            <p class="text-justify">
                                {!! $leaders->description !!}

                                @foreach ($leaders->other_description as $description)
                                    @if($description == null)

                                    @else
                                        <ul class="cs_list cs_style_1 cs_type_1 cs_mp_0">
                                            <li class="mb-2">
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                                {{ $description }}
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
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
