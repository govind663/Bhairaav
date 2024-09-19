@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Project
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
                        <h4>Add Project</h4>
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
                                Add Completed Project
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('bhairaav_projects.store') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="pd-20 card-box mb-30">

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Project Name : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="project_name" id="project_name" class="form-control @error('project_name') is-invalid @enderror" value="{{old('project_name')}}" placeholder="Enter Project Name.">
                        @error('project_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Configuration : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" name="configuration" id="configuration" class="form-control @error('configuration') is-invalid @enderror" value="{{old('configuration')}}" placeholder="Enter Configuration.">
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
                                <option value="1" {{ (old("project_type") == '1' ? "selected":"") }}>Ongoing Projects</option>
                                <option value="2" {{ (old("project_type") == '2' ? "selected":"") }}>Completed Projects</option>
                                <option value="3" {{ (old("project_type") == '3' ? "selected":"") }}>Upcoming Projects</option>

                            </optgroup>
                        </select>
                        @error('project_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label class="col-sm-2"><b>Property Type : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <select name="property_type" id="property_type" class="form-control custom-select2 @error('property_type') is-invalid @enderror" value="{{ old('property_type') }}">
                            <option value="">Select Property Type</option>
                            <optgroup label="Property Type">
                                <option value="1" {{ (old("property_type") == '1' ? "selected":"") }}>Residential</option>
                                <option value="2" {{ (old("property_type") == '2' ? "selected":"") }}>Commercial</option>
                            </optgroup>
                        </select>
                        @error('property_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <table class="table table-bordered p-3"  id="dynamicFeatureTable">
                    <thead>
                        <tr>
                            <th>Select Phase : </th>
                            <th>Maha RERA Registration Number : </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(old('phase_id'))
                            @foreach(old('phase_id') as $index => $oldPhaseId)
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <select name="phase_id[]" class="form-control custom-select2 @error('phase_id.' . $index) is-invalid @enderror">
                                            <option value="">Select Phase</option>
                                            <optgroup label="Phase">
                                                @foreach ($phases as $value)
                                                    <option value="{{ $value->id }}" {{ ($oldPhaseId == $value->id) ? 'selected' : '' }}>{{ $value->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                        @error('phase_id.' . $index)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="maha_rera_registration_number[]" id="maha_rera_registration_number" class="form-control @error('maha_rera_registration_number.' . $index) is-invalid @enderror" value="{{ old('maha_rera_registration_number.' . $index) }}" placeholder="Enter Maha RERA Registration Number">
                                        @error('maha_rera_registration_number.' . $index)
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td><button type="button" class="btn btn-danger removeFeatureRow">Remove</button></td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <select name="phase_id[]" class="form-control custom-select2 @error('phase_id.0') is-invalid @enderror" value="{{ old('phase_id.0') }}">
                                            <option value="">Select Phase</option>
                                            <optgroup label="Phase">
                                                @foreach ($phases as $value)
                                                    <option value="{{ $value->id }}" {{ (old('phase_id.0') == $value->id) ? 'selected' : '' }}>{{ $value->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                        @error('phase_id.0')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="maha_rera_registration_number[]" id="maha_rera_registration_number" class="form-control @error('maha_rera_registration_number.0') is-invalid @enderror" value="{{ old('maha_rera_registration_number.0') }}" placeholder="Enter Maha RERA Registration Number">
                                        @error('maha_rera_registration_number.0')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td><button type="button" class="btn btn-primary" id="addFeatureRow">Add More</button></td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Year Of Completion : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="year_of_completion" id="year_of_completion" class="form-control @error('year_of_completion') is-invalid @enderror" value="{{ old('year_of_completion') }}" placeholder="Enter Year Of Completion.">
                        @error('year_of_completion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label class="col-sm-2"><b>Mobile Number : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="mobile_no" id="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="{{old('mobile_no')}}" placeholder="Enter Mobile Number.">
                        @error('mobile_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Upload Projet Image : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" onchange="agentPreviewFile()" accept=".png, .jpg, .jpeg, .pdf" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}">
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

                <div class="form-group row mt-3">
                    <label class="col-sm-4"><b>Address : <span class="text-danger">*</span></b></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea type="text" name="address" id="address" class="textarea_editor form-control @error('address') is-invalid @enderror" value="{!! old('address') !!}" placeholder="Enter Address.">{!! old('address') !!}</textarea>
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

{{-- Add More RERA Registration Number --}}
<script>
    $(document).ready(function () {
        // Initialize Select2 on document ready for existing elements
        $('.custom-select2').select2();

        // Add a new row with validation
        $('#addFeatureRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <select name="phase_id[]" class="form-control custom-select2 @error('phase_id.*') is-invalid @enderror" value="{{ old('phase_id.0') }}">
                            <option value="">Select Phase</option>
                            <optgroup label="Phase">
                                @foreach ($phases as $value)
                                    <option value="{{$value->id}}" {{ (old("phase_id") == $value->id ? "selected":"") }}>{{$value->name}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('phase_id.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <input type="text" name="maha_rera_registration_number[]" id="maha_rera_registration_number" class="form-control @error('maha_rera_registration_number.*') is-invalid @enderror" value="{{ old('maha_rera_registration_number.0') }}" placeholder="Enter Maha RERA Registration Number">
                        @error('maha_rera_registration_number.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeFeatureRow">Remove</button></td>
            </tr>`;

            // Append new row
        var $newRow = $(newRow).appendTo('#dynamicFeatureTable tbody');

        // Reinitialize Select2 for the new row
        $newRow.find('.custom-select2').select2();
        });

        // Remove a row
        $(document).on('click', '.removeFeatureRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush
