@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Residental Projects
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/projects/completedbg.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Residental Projects</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <div class="col-lg-4">
                    <div class="tj-project-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="tj-project-images">
                            <img src="{{ asset('frontend/assets/img/projects/gold-crest.png') }}" alt="Images" />
                        </div>
                        <div class="project-content">
                            <h4 class="project-title cs_fs_28 cs_bold">
                                <a href="goldcrest-residency.html">
                                    Goldcrest Residency
                                </a>
                            </h4>
                            <div class="project-button">
                                <p>Ghansoli</p>
                                <p>Configuration: 1 & 2 BHK</p>
                                <p> +91-9071056755</p>
                                <div class="poject-icon">
                                    <a href="goldcrest-residency.html">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="tj-project-images">
                            <img src="{{ asset('frontend/assets/img/projects/JoQ_Brochure-013-01.jpg') }}" alt="Images" />
                        </div>
                        <div class="project-content">
                            <h4 class="project-title cs_fs_28 cs_bold">
                                <a href="#">Jewel of Queen</a>
                            </h4>
                            <div class="project-button">
                                <p>Girgaum</p>
                                <p>Configuration: 2, 3, 3.5,<br>4, 4.5, 5 BHK</p>
                                <p> +91-9071123428</p>
                                <div class="poject-icon">
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Servide Section -->
@endsection

@push('scripts')
@endpush
