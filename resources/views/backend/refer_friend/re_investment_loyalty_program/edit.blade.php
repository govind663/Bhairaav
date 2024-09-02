@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Re-Invest Loyalty Program
@endsection

@push('styles')
<style>
    .bootstrap-tagsinput input {
        max-width: 110px;
    }
</style>
@endpush

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Edit Re-Invest Loyalty Program</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('re_investment_loyalty_programs.index') }}">Manage Re-Invest Loyalty Program</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Re-Invest Loyalty Program
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('re_investment_loyalty_programs.update', $re_investment_loyalty_program->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden  value="{{ $re_investment_loyalty_program->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Description :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="description" name="description" class="textarea_editor form-control border-radius-0 @error('description') is-invalid @enderror" placeholder="Enter Description ..." value="{!! $re_investment_loyalty_program->description !!}">{!! $re_investment_loyalty_program->description !!}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('re_investment_loyalty_programs.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
