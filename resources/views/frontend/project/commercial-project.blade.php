@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Ongoing Commercial Projects
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/projects/completedbg.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Ongoing Commercial Projects</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                @foreach ($projects as $key => $value)
                    @if(!empty($projects))
                        <div class="col-lg-4">
                            <div class="tj-project-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="tj-project-images">
                                    <img src="{{ asset('/bhairaav/projects/bhairaav_projects/image/' . $value->image ) }}" alt="Images" />
                                </div>
                                <div class="project-content">
                                    <h4 class="project-title cs_fs_28 cs_bold">
                                        <a href="{{ route('frontend.project.commercial-project.view-project-details', ['id' => $value->id]) }}">
                                            {{ $value->project_name }}
                                        </a>
                                    </h4>
                                    <div class="project-button">
                                        <p>{!! $value->address !!}</p>
                                        <p>Configuration: {{ $value->configuration }}</p>
                                        <p> {{ $value->mobile_no }}</p>
                                        <div class="poject-icon">
                                            <a href="{{ route('frontend.project.commercial-project.view-project-details', ['id' => $value->id]) }}">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4">
                            <div class="tj-project-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="tj-project-images">
                                    <img src="{{ asset('/bhairaav/projects/bhairaav_projects/image/' . $value->image ) }}" alt="Images" />
                                </div>
                                <div class="project-content">
                                    <h4 class="project-title cs_fs_28 cs_bold">
                                        <a href="#">
                                            {{ $value->project_name }}
                                        </a>
                                    </h4>
                                    <div class="project-button">
                                        <p>{!! $value->address !!}</p>
                                        {{-- <p>Year Of Completion: {{ $value->year_of_completion }}</p> --}}
                                        <p>Configuration: {{ $value->configuration }}</p>
                                        <p> {{ $value->mobile_no }}</p>
                                        <div class="poject-icon">
                                            <a href="#">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Servide Section -->
@endsection

@push('scripts')
@endpush
