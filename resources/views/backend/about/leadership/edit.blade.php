@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Leader
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
                        <h4>Edit Leader</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('our-leader.index') }}">Manage Leader</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Leader
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('our-leader.update', $leader->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden  value="{{ $leader->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Name : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $leader->name }}" placeholder="Enter Name.">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Designation : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="designation" id="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ $leader->designation }}" placeholder="Enter Designation.">
                        @error('designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-4"><b>Description : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea type="text" name="description" id="description" class="textarea_editor form-control @error('description') is-invalid @enderror" value="{!! $leader->description !!}" placeholder="Enter Description.">{!! $leader->description !!}</textarea>
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
                            @if(!empty($leader->other_description))
                                @foreach(json_decode($leader->other_description) as $key => $description)
                                    <tr>
                                        <td>
                                            <div class="col-sm-12 col-md-12">
                                                <textarea type="text" name="other_description[]" style="height: 75px;" id="other_description" class="form-control" value="{{ $description }}" placeholder="Enter Other Description.">{{ $description }}</textarea>
                                            </div>
                                        </td>
                                        <td>
                                            @if($loop->first)
                                                <button type="button" class="btn btn-primary" id="addRow">Add More</button>
                                            @else
                                                <button type="button" class="btn btn-danger removeRow">Remove</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach                            
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('our-leader.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
                        <textarea type="text" name="other_description[]" style="height: 75px;" class="form-control" id="other_description" value="{{ old('other_description') }}" placeholder="Enter Other Description.">{{ old('other_description') }}</textarea>
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
