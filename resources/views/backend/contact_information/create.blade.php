@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Contact Information
@endsection

@push('styles')
@endpush

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Add Contact Information</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('contact_information.index') }}">Manage Contact Information</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Contact Information
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('contact_information.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">                    
                    <label class="col-sm-2"><b>Mobile Number : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="phone" id="phone" maxlength="10" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Enter Mobile Number.">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Location Map Link : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="location_map_link" id="location_map_link" class="form-control @error('location_map_link') is-invalid @enderror" value="{{ old('location_map_link') }}" placeholder="Enter Location Map Link.">
                        @error('location_map_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Location : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-10 col-md-10">
                        <textarea type="text" name="location" id="location" class="textarea_editor form-control border-radius-0 @error('location') is-invalid @enderror" value="{{ old('location') }}" placeholder="Enter Location.">{{ old('location') }}</textarea>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('contact_information.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </div>

        </form>

    </div>

    <!-- Footer Start -->
    <x-backend.footer />
    <!-- Footer Start -->
</div>
@endsection

@push('scripts')
@endpush
