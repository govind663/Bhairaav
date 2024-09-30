@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Privacy Policy
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
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Add Privacy Policy</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('privacy_policies.index') }}">Manage Privacy Policy</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Privacy Policy
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('privacy_policies.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Introduction :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="introduction" name="introduction" class="form-control border-radius-0 @error('introduction') is-invalid @enderror" placeholder="Enter introduction ..." value="{{ old('introduction') }}">{{ old('introduction') }}</textarea>
                        @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Introduction :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="introduction" name="introduction" class="form-control border-radius-0 @error('introduction') is-invalid @enderror" placeholder="Enter Introduction ..." value="{{ old('introduction') }}">{{ old('introduction') }}</textarea>
                        @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>We May Collect And Process The Following Data About You : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3"  id="dataCollectionTable">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12 mb-3">
                                        <textarea  id="data_collection" name="data_collection[]" class="form-control border-radius-0 @error('data_collection.*') is-invalid @enderror" placeholder="Enter Data Collection ..." value="{{ old('data_collection.*') }}">
                                            {{ old('data_collection.*') }}
                                        </textarea>
                                        @error('data_collection.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    {{-- <button type="button" class="btn btn-danger removeRow">Remove</button> --}}
                                    <button type="button" class="btn btn-primary" id="addDataCollectionRow">Add More</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>Use of the information : <span class="text-danger">*</span></b></label>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>Closure of your information : <span class="text-danger">*</span></b></label>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>We store your personal data : <span class="text-danger">*</span></b></label>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Cookies :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="cookies" name="cookies" class="form-control border-radius-0 @error('cookies') is-invalid @enderror" placeholder="Enter Cookies ..." value="{{ old('cookies') }}">{{ old('cookies') }}</textarea>
                        @error('cookies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12">Our Rights : <span class="text-danger">*</span></strong></label>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Changes to our privacy policy :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="changing_privacy_policy" name="changing_privacy_policy" class="form-control border-radius-0 @error('changing_privacy_policy') is-invalid @enderror" placeholder="Enter Changes to our privacy policy ..." value="{{ old('changing_privacy_policy') }}">{{ old('changing_privacy_policy') }}</textarea>
                        @error('changing_privacy_policy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('privacy_policies.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- Add More Datacollection --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addDataCollectionRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="data_collection" name="data_collection[]" class="form-control border-radius-0 @error('data_collection.*') is-invalid @enderror" placeholder="Enter Data Collection ..." value="{{ old('data_collection.*') }}">
                            {{ old('data_collection.*') }}
                        </textarea>
                        @error('data_collection.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeDatacollectionRow">Remove</button></td>
            </tr>`;
            $('#dataCollectionTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeDatacollectionRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush
