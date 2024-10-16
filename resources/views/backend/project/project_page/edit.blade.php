@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Project Details
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
                        <h4>Edit Project Details</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('project-details.index') }}">Manage Project Details</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Project Details
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="{{ route('project-details.update', $projectDetail->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden  value="{{ $projectDetail->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="col-12">
                    <h4 class="text-blue h4">Project Banner Details</h4>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2"><b>Project Type : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-4 col-md-4">
                            <select name="project_type_id" id="project_type_id" class="form-control custom-select2 @error('project_type_id') is-invalid @enderror" value="{{ old('project_type_id') }}">
                                <option value="">Select Project Type</option>
                                <optgroup label="Project Type">
                                    <option value="1" {{ ( $projectDetail->project_type_id == '1' ? "selected":"") }}>Ongoing Project</option>
                                    <option value="2" {{ ( $projectDetail->project_type_id == '2' ? "selected":"") }}>Completed Project</option>
                                    {{-- <option value="3" {{ ( $projectDetail->project_type_id == '3' ? "selected":"") }}>Upcoming Project</option> --}}
                                </optgroup>
                            </select>
                            @error('project_type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label class="col-sm-2"><b>Project Name : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-4 col-md-4">
                            <select name="project_name_id" id="project_name_id" class="form-control custom-select2 @error('project_name_id') is-invalid @enderror" value="{{ old('project_name_id') }}">
                                <option value="">Select Project Name</option>
                                <optgroup label="Project Name">
                                    @foreach ($projectNames as $projectName)
                                    <option value="{{ $projectName->id }}" {{ ( $projectDetail->project_name_id == $projectName->id ? "selected":"") }}>
                                            {{ $projectName->project_name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('project_name_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-2"><b>Project Link : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-4 col-md-4">
                            <input type="text" name="project_link" id="project_link" class="form-control @error('project_link') is-invalid @enderror" value="{{ $projectDetail->project_link }}" placeholder="Enter Project Link.">
                            @error('project_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <table class="table table-bordered p-3" id="dynamicBannerImageTable">
                        <thead>
                            <tr>
                                <th>Project Banner Image : <span class="text-danger">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($bannerImages))
                                @foreach(json_decode($bannerImages) as $key => $bannerImage)
                                    <tr>
                                        <td width="85%">
                                            <div class="row d-flex col-sm-8 col-md-8">
                                                @if(!empty($bannerImage))
                                                    <img src="{{ asset('/bhairaav/project_details/banner_image/' . $bannerImage) }}" alt="{{ $bannerImage }}" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                                @endif
                                                <div id="banner-container-0">
                                                    <div id="file-banner-0"></div>
                                                </div>
                                                <input type="file" onchange="bannerPreviewFiles(0)" accept=".png, .jpg, .jpeg" name="banner_image[]" id="banner_image_0" class="form-control mt-2 @error('banner_image.*') is-invalid @enderror" value="{{ $bannerImage }}">
                                                <small class="text-secondary"><b>Note : The file size should be less than 2MB.</b></small>
                                                <br>
                                                <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded.</b></small>
                                                @error('banner_image.*')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td width="15%">
                                            @if($loop->first)
                                                <button type="button" class="btn btn-primary" id="addBannerImageRow">Add More</button>
                                            @else
                                                <button type="button" class="btn btn-danger removeBannerImageRow">Remove</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <h4 class="text-blue h4">Project Overview Details</h4>
                    <div class="form-group row mt-3">
                        <label class="col-sm-4"><b>Project Overview Image : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-8 col-md-8">
                            <input type="file" onchange="overviewPreviewFiles()" accept=".png, .jpg, .jpeg" name="overview_image" id="overview_image" class="form-control @error('overview_image') is-invalid @enderror" value="{{ $projectDetail->overview_image }}">
                            <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                            <br>
                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded .</b></small>
                            <br>
                            @error('overview_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <!-- Image preview -->
                            <img id="overview_image_preview" src="{{ $projectDetail->overview_image ? asset('/bhairaav/project_details/overview_image/' . $projectDetail->overview_image) : '' }}" alt="Overview Image" class="img-thumbnail mt-2" style="max-width: 200px; max-height: 200px; {{ $projectDetail->overview_image ? '' : 'display: none;' }}">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-4"><b>Project Description : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-12 col-md-12">
                            <textarea name="project_description" id="project_description" class="form-control textarea_editor border-radius-0 @error('project_description') is-invalid @enderror" rows="4" placeholder="Enter Project Description here." value="{{ $projectDetail->project_description }}" >{{ $projectDetail->project_description }}</textarea>
                            @error('project_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h4 class="text-blue h4">Project Hallmarks Details</h4>
                    <table class="table table-bordered p-3" id="dynamicTable">
                        <thead>
                            <tr>
                                <th>Project Hallmarks : <span class="text-danger">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Existing Row Template -->
                            @foreach(old('hallmarks', $projectHallmarks) as $key => $hallmark)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="hallmarks[]" id="hallmarks" class="form-control @error('hallmarks.*') is-invalid @enderror" value="{{ is_string($hallmark) ? $hallmark : $hallmark->hallmarks }}" placeholder="Enter Project Hallmarks">
                                            @error('hallmarks.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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

                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <h4 class="text-blue h4">Location Advantages</h4>
                    <div class="form-group row mt-3">
                        <label class="col-sm-1"><b>Title : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-11 col-md-11">
                            <input type="text" name="location_advantages_title" id="location_advantages_title" class="form-control @error('location_advantages_title') is-invalid @enderror" value="{{ $projectDetail->location_advantages_title }}" placeholder="Enter Title.">
                            @error('location_advantages_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3"><b>Project Location Link : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-9 col-md-9">
                            <input type="text" name="gps_link" id="gps_link" class="form-control @error('gps_link') is-invalid @enderror" value="{{ $projectDetail->gps_link }}" placeholder="Enter Title.">
                            @error('gps_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3"><b>Upload Project Image : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-9 col-md-9">
                            <input type="file" onchange="projectImageFiles()" accept=".png, .jpg, .jpeg" name="project_image" id="project_image" class="form-control @error('project_image') is-invalid @enderror" value="{{ $projectDetail->project_image }}" placeholder="Enter Title.">
                            <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                            <br>
                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded .</b></small>
                            <br>
                            @error('project_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <!-- Image preview -->
                            <img src="{{ $projectDetail->project_image ? asset('/bhairaav/project_details/project_image/' . $projectDetail->project_image) : '' }}" alt="Project Image" class="img-thumbnail mt-2" style="max-width: 200px; max-height: 200px; {{ $projectDetail->project_image ? '' : 'display: none;' }}">
                            <br>
                            <div id="project-image-container">
                                <div id="file-project-image"></div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered p-3"  id="dynamicFeatureTable">
                        <thead>
                            <tr>
                                <th>Select Feature Name : <span class="text-danger">*</span></th>
                                <th>Feature Value : <span class="text-danger">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Existing Rows -->
                            @foreach($projectLocationAdvantages as $index => $locationAdvantage)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <select name="location_advantage_id[]" id="location_advantage_id" class="form-control custom-select2 @error('location_advantage_id') is-invalid @enderror">
                                                <option value="">Select Feature Name</option>
                                                <optgroup label="Feature Name">
                                                    @foreach ($featureName as $value )
                                                        <option value="{{ $value->id }}" {{ $locationAdvantage->location_advantage_id == $value->id ? 'selected' : '' }}>{{ $value->feature_name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                            @error('location_advantage_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="feature_value[]" id="feature_value" class="form-control @error('feature_value.*') is-invalid @enderror" value="{{ $locationAdvantage->feature_value }}" placeholder="Enter Feature Value">
                                            @error('feature_value.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        @if($loop->first)
                                            <button type="button" class="btn btn-primary" id="addFeatureRow">Add More</button>
                                        @else
                                            <button type="button" class="btn btn-danger removeFeatureRow">Remove</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="col-12">
                    <h4 class="text-blue h4">Amenities & Features</h4>
                    <div class="form-group row mt-3">
                        <label class="col-sm-1"><b>Amenities Title : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-11 col-md-11">
                            <input type="text" name="amenities_title" id="amenities_title" class="form-control @error('amenities_title') is-invalid @enderror" value="{{ $projectDetail->amenities_title }}" placeholder="Enter Amenities Title.">
                            @error('amenities_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <table class="table table-bordered p-3"  id="dynamicAmenitiesTable">
                        <thead>
                            <tr>
                                <th>Uploaded Amenitie Image : <span class="text-danger">*</span></th>
                                <th>Amenitie Image Name : <span class="text-danger">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projectAmenities as $index => $amenity)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <!-- Show existing image -->
                                            @if($amenity->amenite_image)
                                                <img src="{{ asset('/bhairaav/project_details/amenity_images/' . $amenity->amenite_image) }}" alt="Amenitie Image" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                            @endif
                                            <div id="overview-amenite-container-0">
                                                <div id="file-overview-amenite-0"></div>
                                            </div>
                                            <input type="file" onchange="overviewAmenitePreviewFiles(0)" accept=".png, .jpg, .jpeg" name="amenite_image[]" id="amenite_image_0" class="form-control @error('amenite_image.*') is-invalid @enderror" value="{{ $amenity->amenite_image }}">
                                            <!-- Hidden field to store the existing image -->
                                            <input type="hidden" name="existing_amenite_image[]" value="{{ $amenity->amenite_image }}">

                                            <small class="text-secondary"><b>Note : The file size should be less than 2MB.</b></small>
                                            <br>
                                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded.</b></small>
                                            <br>
                                            @error('amenite_image.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="amenite_image_name[]" id="amenite_image_name_{{ $index }}" class="form-control @error('amenite_image_name.*') is-invalid @enderror" value="{{  $amenity->amenite_image_name }}" placeholder="Enter Amenitie Image Name">
                                            @error('amenite_image_name.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        @if($loop->first)
                                            <button type="button" class="btn btn-primary" id="addAmenitiesRow">Add More</button>
                                        @else
                                            <button type="button" class="btn btn-danger removeAmenitiesRow">Remove</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <h4 class="text-blue h4">Gallery</h4>
                    <div class="form-group row mt-3">
                        <label class="col-sm-1"><b>Title : <span class="text-danger">*</span></b></label>
                        <div class="col-sm-11 col-md-11">
                            <input type="text" name="gallery_title" id="gallery_title" class="form-control @error('gallery_title') is-invalid @enderror" value="{{ $projectDetail->gallery_title }}" placeholder="Enter Title.">
                            @error('gallery_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <table class="table table-bordered p-3"  id="dynamicGalleryTable">
                        <thead>
                            <tr>
                                <th>Uploaded Gallery Image : <span class="text-danger">*</span></th>
                                <th>Gallery Image Name : <span class="text-danger">*</span></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projectGallery as $index => $gallery)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <!-- Show existing image -->
                                            @if($gallery->gallery_image)
                                                <img src="{{ asset('/bhairaav/project_details/gallery_image/' . $gallery->gallery_image) }}" alt="Gallery Image" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                            @endif
                                            <div id="overview-gallery-container-0">
                                                <div id="file-overview-gallery-0"></div>
                                            </div>
                                            <input type="file" onchange="overviewGalleryPreviewFiles(0)" accept=".png, .jpg, .jpeg" name="gallery_image[]" id="gallery_image_0" class="form-control @error('gallery_image.*') is-invalid @enderror" value="{{ $gallery->gallery_image }}">
                                            <!-- Hidden field to store the existing image -->
                                            <input type="hidden" name="existing_gallery_image[]" value="{{ $gallery->gallery_image }}">

                                            <small class="text-secondary"><b>Note : The file size should be less than 2MB.</b></small>
                                            <br>
                                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded.</b></small>
                                            <br>
                                            @error('gallery_image.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="gallery_image_name[]" id="gallery_image_name_{{ $index }}" class="form-control @error('gallery_image_name.*') is-invalid @enderror" value="{{ $gallery->gallery_image_name }}" placeholder="Enter Gallery Image Name">
                                            @error('gallery_image_name.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        @if($loop->first)
                                            <button type="button" class="btn btn-primary" id="addGalleryRow">Add More</button>
                                        @else
                                            <button type="button" class="btn btn-danger removeGalleryRow">Remove</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('project-details.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- Add More Banner Image or View both Image and PDF --}}
<script>
    $(document).ready(function () {
        let rowId = 0;

        // Add a new row with validation
        $('#addBannerImageRow').click(function () {
            rowId++;
            var newRow = `<tr>
                <td>
                    <div class="col-sm-8 col-md-8">
                        <div id="banner-container-${rowId}">
                            <div id="file-banner-${rowId}"></div>
                        </div>
                        <input type="file" onchange="bannerPreviewFiles(${rowId})" accept=".png, .jpg, .jpeg" name="banner_image[]" id="banner_image_${rowId}" class="form-control @error('banner_image.*') is-invalid @enderror">
                        <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                        <br>
                        <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded .</b></small>
                        <br>
                        @error('banner_image.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeBannerImageRow">Remove</button></td>
            </tr>`;
            $('#dynamicBannerImageTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeBannerImageRow', function () {
            $(this).closest('tr').remove();
        });
    });

    // Banner Image Preview
    function bannerPreviewFiles(rowId) {
        const fileInput = document.getElementById(`banner_image_${rowId}`);
        const previewContainer = document.getElementById(`banner-container-${rowId}`);
        const filePreview = document.getElementById(`file-banner-${rowId}`);
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:150px; height:60px !important;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="25%" />`;
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

{{-- Overview both Image and PDF --}}
<script>
    function overviewPreviewFiles() {
        const fileInput = document.getElementById('overview_image');
        const previewContainer = document.getElementById('overview-container');
        const filePreview = document.getElementById('file-overview');
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:500px; height:300px !important;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="25%" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
                filePreview.innerHTML += `<p>Please select a valid image or PDF file.</p>`;
                filePreview.innerHTML += `<p>You can also drag and drop a file here to preview.</p>`;

                previewContainer.style.display = 'none';

                return;
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }

    }

</script>

{{-- Add More Hallmarks --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <input type="text" name="hallmarks[]" id="hallmarks" class="form-control @error('hallmarks.*') is-invalid @enderror" value="{{ old('hallmarks.0') }}" placeholder="Enter Project Hallmarks">
                        @error('hallmarks.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

{{-- Add More Location Advantages --}}
<script>
    $(document).ready(function () {
        // Initialize Select2 on document ready for existing elements
        $('.custom-select2').select2();

        // Add a new row with validation
        $('#addFeatureRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <select name="location_advantage_id[]" class="form-control custom-select2 @error('location_advantage_id') is-invalid @enderror" value="{{ old('location_advantage_id.0') }}">
                            <option value="">Select Feature Name</option>
                            <optgroup label="Feature Name">
                                @foreach ($featureName as $value )
                                    <option value="{{ $value->id }}" {{ (old("location_advantage_id") == $value->id ? "selected":"") }}>{{ $value->feature_name }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('location_advantage_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td>
                    <div class="col-sm-12 col-md-12">
                        <input type="text" name="feature_value[]" class="form-control @error('feature_value.*') is-invalid @enderror" value="{{ old('feature_value.0') }}" placeholder="Enter Feature Value">
                        @error('feature_value.*')
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

            // Initialize Select2 only for new elements within the new row
            $newRow.find('.custom-select2').not('.select2-hidden-accessible').select2();
        });

        // Remove a row
        $(document).on('click', '.removeFeatureRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Amities & Features or View both Image and PDF --}}
<script>
    $(document).ready(function () {
        let rowId = 0;

        // Add a new row
        $('#addAmenitiesRow').click(function () {
            rowId++;
            const newRow = `
                <tr>
                    <td>
                        <div class="col-sm-12 col-md-12">
                            <div id="overview-amenite-container-${rowId}">
                                <div id="file-overview-amenite-${rowId}"></div>
                            </div>
                            <input type="file" onchange="overviewAmenitePreviewFiles(${rowId})" accept=".png, .jpg, .jpeg" name="amenite_image[]" id="amenite_image_${rowId}" class="form-control @error('amenite_image.*') is-invalid @enderror">
                            <small class="text-secondary"><b>Note : The file size should be less than 2MB.</b></small>
                            <br>
                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png format can be uploaded.</b></small>
                            <br>
                            @error('amenite_image.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12 col-md-12">
                            <input type="text" name="amenite_image_name[]" id="amenite_image_name_${rowId}" class="form-control @error('amenite_image_name.*') is-invalid @enderror" placeholder="Enter Feature Value">
                        </div>
                    </td>
                    <td><button type="button" class="btn btn-danger removeAmenitiesRow">Remove</button></td>
                </tr>`;
            $('#dynamicAmenitiesTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeAmenitiesRow', function () {
            $(this).closest('tr').remove();
        });
    });

    // Preview file
    function overviewAmenitePreviewFiles(rowId) {
        const fileInput = document.getElementById(`amenite_image_${rowId}`);
        const previewContainer = document.getElementById(`overview-amenite-container-${rowId}`);
        const filePreview = document.getElementById(`file-overview-amenite-${rowId}`);
        const file = fileInput.files[0];

        if (!fileInput || !previewContainer || !filePreview) return; // Guard clause

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function (e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:120px; height:100px !important;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview
                filePreview.innerHTML = `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="25%" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
                filePreview.innerHTML += `<p>Please select a valid image or PDF file.</p>`;
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }
    }
</script>

{{-- Add More Gallery or View both Image and PDF --}}
<script>
    $(document).ready(function () {
    let rowId = 0;

    $('#addGalleryRow').click(function () {
        rowId++;
        var newRow = `
        <tr>
            <td>
                <div class="col-sm-12 col-md-12">
                    <div id="overview-gallery-container-${rowId}">
                        <div id="file-overview-gallery-${rowId}"></div>
                    </div>

                    <input type="file" onchange="overviewGalleryPreviewFiles(${rowId})" accept=".png, .jpg, .jpeg" name="gallery_image[]" id="gallery_image_${rowId}" class="form-control @error('gallery_image.*') is-invalid @enderror">
                    <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small>
                    <br>
                    <small class="text-secondary"><b>Note: Only files in .jpg, .jpeg, .png format can be uploaded.</b></small>
                    <br>
                    @error('gallery_image.*')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </td>
            <td>
                <div class="col-sm-12 col-md-12">
                    <input type="text" name="gallery_image_name[]" id="gallery_image_name_${rowId}" class="form-control @error('gallery_image_name.*') is-invalid @enderror" placeholder="Enter Gallery Image Name">
                    @error('gallery_image_name.*')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </td>
            <td><button type="button" class="btn btn-danger removeGalleryRow">Remove</button></td>
        </tr>`;
        $('#dynamicGalleryTable tbody').append(newRow);
    });

    // Remove row
    $(document).on('click', '.removeGalleryRow', function () {
            $(this).closest('tr').remove();
        });
    });

    // Preview files
    function overviewGalleryPreviewFiles(rowId) {
        const fileInput = document.getElementById(`gallery_image_${rowId}`);
        const previewContainer = document.getElementById(`overview-gallery-container-${rowId}`);
        const filePreview = document.getElementById(`file-overview-gallery-${rowId}`);
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:120px; height:100px !important;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview
                filePreview.innerHTML = `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="100px" />`;
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

{{-- fetch all projects --}}
<script>
    $(document).ready(function () {
        $('#project_type_id').on('change', function () {
            var project_type_id = this.value;
            $("#project_name_id").html('');
            $.ajax({
                url: "{{ route('fetch-projects') }}",
                type: "POST",
                data: {
                    projectTypeId: project_type_id,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function (result) {
                    $('#project_name_id').html('<option value="">-- Select Project Name --</option>');
                    $.each(result.projects, function (key, value) {
                        $("#project_name_id").append('<option value="' + value.id + '">' + value.project_name + '</option>');
                    });
                }
            });
        });
    });
</script>

{{-- Project preview both Image and PDF --}}
<script>
    function projectImageFiles() {
        const fileInput = document.getElementById('project_image');
        const previewContainer = document.getElementById('project-image-container');
        const filePreview = document.getElementById('file-project-image');
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:500px; height:300px !important;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="25%" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
                filePreview.innerHTML += `<p>Please select a valid image or PDF file.</p>`;
                filePreview.innerHTML += `<p>You can also drag and drop a file here to preview.</p>`;

                previewContainer.style.display = 'none';

                return;
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }

    }

</script>
@endpush
