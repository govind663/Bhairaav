@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Phase
@endsection

@push('styles')
@endpush

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Edit Phase</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('multiple_phase.index') }}">Manage Phase</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Phase
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <form method="POST" action="{{ route('multiple_phase.update', $phase->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden  value="{{ $phase->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Name : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $phase->name }}" placeholder="Enter Name.">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('multiple_phase.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
