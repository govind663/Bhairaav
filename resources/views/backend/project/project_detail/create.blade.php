@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Project Details
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
                        <h4>Add Project Details</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('project_details.index') }}">Manage Project Details</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Add Project Details
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('project_details.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Project Type : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <select name="project_type" id="project_type" class="form-control custom-select2 @error('project_type') is-invalid @enderror" value="{{ old('project_type') }}">
                            <option value="">Select Project Type</option>
                            <optgroup label="Project Type">
                                <option value="1" {{ (old("project_type") == '1' ? "selected":"") }}>Residential</option>
                                <option value="2" {{ (old("project_type") == '2' ? "selected":"") }}>Commercial</option>
                            </optgroup>
                        </select>
                        @error('project_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-3"><b>Upload Projet Image : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-8 col-md-8">
                        <input type="file" multiple onchange="agentPreviewFiles()" accept=".png, .jpg, .jpeg, .pdf" name="image[]" id="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
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
                        <div id="preview-container">
                            <div id="file-preview"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('project_details.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
    function agentPreviewFiles() {
        const fileInput = document.getElementById('image');
        const filePreview = document.getElementById('file-preview');

        const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        const validPdfTypes = ['application/pdf'];

        Array.from(fileInput.files).forEach(file => {
            const fileType = file.type;

            // Create a container for each file preview with a delete button
            const previewContainer = document.createElement('div');
            previewContainer.style.position = 'relative';
            previewContainer.style.display = 'inline-block';

            // Create the delete icon
            const deleteIcon = document.createElement('span');
            deleteIcon.innerHTML = '&times;';
            deleteIcon.style.position = 'absolute';
            deleteIcon.style.top = '5px';
            deleteIcon.style.right = '5px';
            deleteIcon.style.cursor = 'pointer';
            deleteIcon.style.color = 'red';
            deleteIcon.style.fontSize = '18px';
            deleteIcon.title = 'Remove this file';
            deleteIcon.onclick = function() {
                previewContainer.remove(); // Remove the preview container on delete icon click
            };

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'File Preview';
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.style.margin = '5px';
                    previewContainer.appendChild(img);
                    previewContainer.appendChild(deleteIcon); // Add delete icon to the preview
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                const embed = document.createElement('embed');
                embed.src = URL.createObjectURL(file);
                embed.type = 'application/pdf';
                embed.style.width = '100px';
                embed.style.height = '100px';
                embed.style.margin = '5px';
                previewContainer.appendChild(embed);
                previewContainer.appendChild(deleteIcon); // Add delete icon to the preview
            } else {
                // Unsupported file type
                const errorText = document.createElement('p');
                errorText.textContent = 'Unsupported file type';
                previewContainer.appendChild(errorText);
                previewContainer.appendChild(deleteIcon); // Add delete icon to the preview
            }

            // Append the preview container with the file and delete icon to the filePreview element
            filePreview.appendChild(previewContainer);
        });
    }
</script>
@endpush
