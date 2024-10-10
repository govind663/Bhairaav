@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Blog
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
                        <h4>Add Career</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('careers.index') }}">Manage Career</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Career
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('careers.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Career Title : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="career_title" id="career_title" class="form-control @error('career_title') is-invalid @enderror" value="{{old('career_title')}}" placeholder="Enter Career Title.">
                        @error('career_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Upload Career Image : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" onchange="careerPreviewFile()" accept=".png, .jpg, .jpeg" name="career_image" id="career_image" class="form-control @error('career_image') is-invalid @enderror" value="{{old('career_image')}}">
                        <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                        <br>
                        <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded .</b></small>
                        <br>
                        @error('career_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <div id="preview-career-container">
                            <div id="file-career-preview"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Career Description :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="career_description" name="career_description" class="textarea_editor form-control border-radius-0 @error('career_description') is-invalid @enderror" placeholder="Enter Career Description ..." value="{{old('career_description')}}">{{old('description')}}</textarea>
                        @error('career_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <b>Job Position : <span class="text-danger">*</span></b>
                    <table class="table table-bordered p-3"  id="dynamicJobPositionTable">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="job_title[]" id="job_title" class="form-control @error('job_title.*') is-invalid @enderror" value="{{ old('job_title.0') }}" placeholder="Enter Job Position">
                                        @error('job_title.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" id="addJobPositionRow">Add More</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <b>Job Description : <span class="text-danger">*</span></b>
                    <table class="table table-bordered p-3"  id="dynamicJobDescriptionTable">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="job_description[]" id="job_description" class="form-control @error('job_description.*') is-invalid @enderror" value="{{ old('job_description.0') }}" placeholder="Enter Job Position">
                                        @error('job_description.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" id="addJobDescriptionRow">Add More</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('careers.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- Add More Job Position --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addJobPositionRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <input type="text" name="job_title[]" id="job_title" class="form-control @error('job_title.*') is-invalid @enderror" value="{{ old('job_title.0') }}" placeholder="Enter Job Position">
                        @error('job_title.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeJobPositionRow">Remove</button></td>
            </tr>`;
            $('#dynamicJobPositionTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeJobPositionRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Job Description --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addJobDescriptionRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <input type="text" name="job_description[]" id="job_description" class="form-control @error('job_description.*') is-invalid @enderror" value="{{ old('job_description.0') }}" placeholder="Enter Job Position">
                        @error('job_description.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeJobDescriptionRow">Remove</button></td>
            </tr>`;
            $('#dynamicJobDescriptionTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeJobDescriptionRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- preview both career image and PDF --}}
<script>
    function careerPreviewFile() {
        const fileInput = document.getElementById('career_image');
        const previewContainer = document.getElementById('preview-career-container');
        const filePreview = document.getElementById('file-career-preview');
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" width="50%" height="50">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="150px" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }

    }

</script>
@endpush
