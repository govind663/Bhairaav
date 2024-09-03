@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Project
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
                        <h4>Edit Project</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('bhairaav_projects.index') }}">Manage Project</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Project
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('bhairaav_projects.update', $project->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden  value="{{ $project->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Project Name : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="project_name" id="project_name" class="form-control @error('project_name') is-invalid @enderror" value="{{ $project->project_name }}" placeholder="Enter Project Name.">
                        @error('project_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Configuration : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="configuration" id="configuration" class="form-control @error('configuration') is-invalid @enderror" value="{{ $project->configuration }}" placeholder="Enter Configuration.">
                        @error('configuration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Project Type : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <select name="project_type" id="project_type" class="form-control custom-select2 @error('project_type') is-invalid @enderror" value="{{ old('project_type') }}">
                            <option value="">Select Project Type</option>
                            <optgroup label="Project Type">
                                <option value="1" {{ ( $project->project_type == '1' ? "selected":"") }}>Residential</option>
                                <option value="2" {{ ( $project->project_type == '2' ? "selected":"") }}>Commercial</option>
                            </optgroup>
                        </select>
                        @error('project_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Mobile Number : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="mobile_no" id="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="{{ $project->mobile_no }}" placeholder="Enter Mobile Number.">
                        @error('mobile_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Upload Image : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" onchange="agentPreviewFile()" accept=".png, .jpg, .jpeg, .pdf" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ $project->image }}">
                        <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                        <br>
                        <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .pdf format can be uploaded .</b></small>
                        <br>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        @if(!empty($project->image))
                            <a href="{{ url('/') }}/bhairaav/projects/bhairaav_projects/image/{{ $project->image }}" target="_blank" class="btn btn-primary btn-sm">
                                <i class="micon dw dw-eye"></i> Document
                            </a>
                        @endif
                        <br>
                        <div id="preview-container">
                            <div id="file-preview"></div>
                        </div>
                    </div>

                    <label class="col-sm-1"><b>Address : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <textarea type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" placeholder="Enter Address.">{{ $project->address }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('bhairaav_projects.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- preview both Image and PDF --}}
<script>
    function agentPreviewFile() {
        const fileInput = document.getElementById('image');
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
@endpush
