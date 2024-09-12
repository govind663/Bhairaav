@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Testimonial
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
                        <h4>Add Testimonial</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('testimonials.index') }}">Manage Testimonial</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Testimonial
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('testimonials.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Name : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Enter name.">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-30">
                    <label class="col-sm-4"><b>Description : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea type="text" name="description" id="description" class="textarea_editor form-control @error('description') is-invalid @enderror" value="{!! old('description') !!}" placeholder="Enter Description.">{!! old('description') !!}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Upload Image : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" onchange="agentPreviewFile()" accept=".png, .jpg, .jpeg, .pdf" name="profile_image" id="profile_image" class="form-control @error('profile_image') is-invalid @enderror" value="{{old('profile_image')}}">
                        <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                        <br>
                        <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .pdf format can be uploaded .</b></small>
                        <br>
                        @error('profile_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <div id="preview-container">
                            <div id="file-preview"></div>
                        </div>
                    </div>

                    <label class="col-sm-2"><b>Star Count : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" onchange="validateStarCount(this)" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="star_count" id="star_count" maxlength="2" class="form-control @error('star_count') is-invalid @enderror" maxlength="2"  value="{{old('star_count')}}" placeholder="Enter Star Count.">
                        @error('star_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('testimonials.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- preview both image and PDF --}}
<script>
    function agentPreviewFile() {
        const fileInput = document.getElementById('profile_image');
        const previewContainer = document.getElementById('preview-container');
        const filePreview = document.getElementById('file-preview');
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

<script>
    function validateStarCount(input) {
        const value = parseInt(input.value, 10);
        if (value >= 10 || value < 0 || isNaN(value)) {
            input.value = '';
            alert('Please enter a value less than 10.');
        }
    }
</script>
@endpush
