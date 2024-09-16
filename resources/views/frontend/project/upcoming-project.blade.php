@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Upcoming Projects
@endsection

@push('styles')
<style>
    .tr-destination-item {
        transition: all 0.3s;
        border-radius: 20px;
        background: white;
        border-bottom: 2px solid transparent;
        box-shadow: 0 2px 6px -1px rgba(19, 16, 34, 0.03), 0 4px 12px -1px rgba(19, 16, 34, 0.06);
        padding: 25px 25px;
        /* padding-top: 15px; */
        text-align: center;
    }
    .tr-destination-item h4 {
        margin-bottom: 0px;
        font-weight: 700;
        color: #01609d;
        text-transform: capitalize;
        margin-bottom: 6px;
    }
</style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/projects/completedbg.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Upcoming Projects</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Servide Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_35">
                <div class="col-lg-4">
                    <div class="tr-destination-item">
                        <h4 class="tr-destination-title">Bhairaav blossom </h4>
                        <p class="tr-destination-location">(Commercial ) bkc</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tr-destination-item">
                        <h4 class="tr-destination-title">SRA project </h4>
                        <p class="tr-destination-location"> (Mixed development) Mankhurd</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tr-destination-item">
                        <h4 class="tr-destination-title">Bhairaav Samruddhi</h4>
                        <p class="tr-destination-location"> (Redevelopment) lalbaug</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tr-destination-item">
                        <h4 class="tr-destination-title">Redevelopment project </h4>
                        <p class="tr-destination-location"> (residential) bhandup</p>
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
