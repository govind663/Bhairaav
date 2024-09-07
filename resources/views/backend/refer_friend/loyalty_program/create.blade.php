@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Loyalty Program
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
                        <h4>Add Loyalty Program</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('loyalty_programs.index') }}">Manage Loyalty Program</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Loyalty Program
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('loyalty_programs.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-1"><b>Title : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-11 col-md-11">
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Enter Title.">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Description :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="description" name="description" class="textarea_editor form-control border-radius-0 @error('description') is-invalid @enderror" placeholder="Enter Description ..." value="{{old('description')}}">{{old('description')}}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3 p-3">
                    <table class="table table-bordered p-3"  id="dynamicTable">
                        <thead>
                            <tr>
                                <th>Other Description : </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <textarea type="text" name="other_description[]" class="form-control" style="height: 75px;" id="other_description" value="{{ old('other_description') }}" placeholder="Enter Other Description.">{{ old('other_description') }}</textarea>
                                    </div>
                                </td>
                                <td>
                                    {{-- <button type="button" class="btn btn-danger removeRow">Remove</button> --}}
                                    <button type="button" class="btn btn-primary" id="addRow">Add More</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('loyalty_programs.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- Add More Hallmarks --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <textarea type="text" name="other_description[]" class="form-control" style="height: 75px;" id="other_description" value="{{ old('other_description') }}" placeholder="Enter Other Description.">{{ old('other_description') }}</textarea>
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeRow">Remove</button></td>
            </tr>`;
            $('#dynamicTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush
