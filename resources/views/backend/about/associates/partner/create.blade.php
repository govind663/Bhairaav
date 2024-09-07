@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Partner
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
                        <h4>Add Partner</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('partners.index') }}">Manage Partner</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Partner
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('partners.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Title : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Enter Title.">
                        @error('name')
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
                                <th>Partner Name : </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="partner_name[]" class="form-control" id="partner_name" value="{{ old('partner_name') }}" placeholder="Enter Partner Name.">
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
                        <a href="{{ route('partners.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
                        <input type="text" name="partner_name[]" class="form-control" id="partner_name" value="{{ old('partner_name') }}" placeholder="Enter Partner Name.">
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
