@extends('backend.layouts.master')

@section('title')
Bhairaav | Home
@endsection

@push('styles')
@endpush

@section('content')
<div class="xs-pd-20-10 pd-ltr-20">

    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Dashboard</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <div class="title pb-20">
        <h2 class="h3 mb-0">Project Overview</h2>
    </div>

    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">
                            {{ $total_projects ? $total_projects : 0 }}
                        </div>
                        <div class="font-14 text-secondary weight-500">
                            Total Projects
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#00eccf">
                            <i class="icon-copy dw dw-file"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">
                            {{ $total_ongoing_projects ? $total_ongoing_projects : 0 }}
                        </div>
                        <div class="font-14 text-secondary weight-500">
                            Total Ongoing Projects
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#ff5b5b">
                            <span class="icon-copy ti-file"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">
                            {{ $total_completed_projects ? $total_completed_projects : 0 }}
                        </div>
                        <div class="font-14 text-secondary weight-500">
                            Total Completed Projected
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy fa fa-file-code-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">
                            {{ $total_upcoming_projects ? $total_upcoming_projects : 0 }}
                        </div>
                        <div class="font-14 text-secondary weight-500">
                            Total Upcoming Projects
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#09cc06">
                            <i class="icon-copy fa fa-file" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Footer Start -->
    <x-backend.footer />
    <!-- Footer Start -->

</div>
@endsection

@push('scripts')
@endpush
