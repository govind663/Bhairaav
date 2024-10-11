@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Career
@endsection

@push('styles')
    <style>
        .is-invalid {
            border-color: #dc3545;
            /* Bootstrap's red color for errors */
        }

        .invalid-feedback {
            color: #dc3545;
            /* Match the border color */
            font-size: 0.875em;
            /* Adjust font size as needed */
        }

        /* Change the background color of the modal body */
        .modal-body {
            background-color: #f1f1f1;
            /* Light gray background */
        }

        /* Style the list items in the modal */
        .modal-body ul li {
            margin-bottom: 10px;
            /* Spacing between list items */
        }

        /* Customize the close button */
        .close {
            color: #007bff;
            /* Change the color of the close button */
        }

        /* styles.css */
        .modal-header {
            justify-content: space-between;
            background-color: #f8f9fa;
            /* Light background */
            border-bottom: 2px solid #007bff;
            /* Blue border */
        }

        .modal-title {
            color: #007bff;
            /* Blue color for the title */
        }

        .modal-body {
            font-size: 14px;
            /* Set font size for the body */
            line-height: 1.5;
            /* Increase line height for better readability */
        }

        .modal-body ul {
            padding-left: 1.5em;
            /* Indentation for lists */
        }

        .text-danger {
            color: #dc3545;
            /* Bootstrap danger color */
        }
        .single-vacancy {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e3e3e3;
            padding: 10px 20px;
            transition: ease 0.5s;
            background-color: #ffffff;
        }

        .single-vacancy h6 {
            color: #fff;
            width: 20%;
        }

        .single-vacancy:hover {
            /* background-color: #020202; */
        }

        .single-vacancy h2 {
            color: #c4a266;
            /* width: 60%; */
            margin-bottom: 0px;
            font-size: 19px;
            font-weight: 700;
        }

        .single-vacancy p {
            color: #fff;
            margin-bottom: 0;
            width: 20%;
        }

        .single-vacancy a {
            color: #01609d;
            border-bottom: 1px solid #ccc;
        }

        .single-vacancy-wrap {
            background-color: #01609d;
            padding: 20px 20px;
        }

        .single-vacancy-wrap:hover {
            background-color: #2a2a2a !important;
        }

        .single-vacancy-wrap h2,
        .single-vacancy-wrap h6,
        .single-vacancy-wrap p {
            font-size: 20px;
            /* font-family: 'productsans-bold'; */
        }

        .single-vacancy-wrap h2 {
            width: 60%;
        }

        .single-vacancy-wrap h6 {
            /* width: 20%; */
            margin-bottom: 0px;
        }

        .single-vacancy-wrap p {
            width: 20%;
        }

        .vacancy-wrap {
            padding: 70px 0px;
        }

        .single-vacancy:hover a {
            color: #fff;
        }
    </style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/banner/career.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Career</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Career Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            @if($career)
                <div class="row align-items-center cs_gap_y_45">
                    <div class="col-lg-6">
                        <div class="cs_pr_110 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <img src="{{ asset('/bhairaav/Career/career_image/'.$career->career_image) }}" alt="Service" class="cs_radius_5">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs_section_heading cs_style_1">
                            <div class="cs_section_heading">
                                <h2 class="cs_fs_38 cs_bold mb-0">{{ $career->career_title }}</h2>
                            </div>
                        </div>
                        <div class="cs_height_15 cs_height_lg_35"></div>
                        <p class="text-justify">
                            {!! $career->career_description !!}
                        </p>
                    </div>
                </div>
            @endif
            <div class="cs_height_80 cs_height_lg_40"></div>
        </div>
    </section>
    <!-- End Career Section -->

    <!-- Start Vacancy Section -->
    <section class="vacancy-wrap">
        <div class="container">
            <div class="row">
                <div class="cs_section_heading cs_style_1 text-center">
                    <h2 class="cs_fs_50 cs_bold mb-20">Current Openings</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-vacancy single-vacancy-wrap">
                        <h6>Job Position</h6>
                        <h6></h6>
                    </div>
                </div>
                @if(!empty($career->job_titles))
                    @foreach($career->job_titles as $title)
                        <div class="col-md-12">
                            <div class="single-vacancy">
                                <h2>
                                    {{ $title }}
                                </h2>
                                <p>
                                    <a href="#" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" data-toggle="modal" data-target="#job-position-{{ $loop->iteration }}-form">
                                        Apply Now
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                        fill="currentColor">
                                                    </path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                        fill="currentColor">
                                                    </path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- job-position form modal -->
                        <div class="modal fade" id="job-position-{{ $loop->iteration }}-form" tabindex="-1" aria-labelledby="job-position-{{ $loop->iteration }}-formTitle" aria-hidden="true">
                            <!-- start report input popup -->
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="{{ $loop->iteration }}Title">
                                            {{ $title }}
                                        </h1>
                                        <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body space-y-20 p-40">

                                        <form method="POST" action="{{ route('frontend.store-career-apply', ['job_id' => $loop->iteration]) }}" class="cs_form cs_style_2" enctype="multipart/form-data" autocomplete="off">
                                            @csrf

                                            <input type="text" id="job_id" name="job_id" hidden  value="{{ $loop->iteration }}">
                                            <input type="hidden" name="job_title" id="job_title" value="{{ $title }}">

                                            <div class="col-sm-12 mb-3">
                                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror" name="name" id="name" value="" placeholder="Full Name *">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                                <input type="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email Id *">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                                <input type="text" maxlength="10" class="cs_form_field_2 cs_radius_20 @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}" placeholder="Mobile Number *">
                                                @error('mobile_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 mb-3">
                                                    <input type="text" class="cs_form_field_2 cs_radius_20 @error('department') is-invalid @enderror" name="department" id="department" value="{{ old('department') }}" placeholder="Department *">
                                                    @error('department')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mb-3">
                                                    <input type="text" class="cs_form_field_2 cs_radius_20 @error('currentdesignation') is-invalid @enderror" name="currentdesignation" id="currentdesignation" value="{{ old('currentdesignation') }}" placeholder="Designation *">
                                                    @error('currentdesignation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                                <label class="cs_height_16 cs_height_lg_16"><b>Upload Resume : <span class="text-danger">*</span></b></label>
                                                <input type="file" onchange="candidateResumePreviewFile()" accept=".png, .jpg, .jpeg, .pdf" class="cs_form_field_2 cs_radius_20 @error('candidate_resume_doc') is-invalid @enderror" name="candidate_resume_doc" id="candidate_resume_doc" value="{{ old('candidate_resume_doc') }}" >
                                                <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                                                <br>
                                                <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .pdf format can be uploaded .</b></small>
                                                <br>
                                                @error('candidate_resume_doc')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <br>
                                                <div id="preview-candidate-resume-container">
                                                    <div id="file-candidate-resume-preview"></div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 mb-3">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                                @error('g-recaptcha-response')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <button class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" type="submit">
                                                <b>Submit</b>
                                                <span>
                                                    <i>
                                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </i>
                                                    <i>
                                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </i>
                                                </span>
                                            </button>
                                        </form>
                                    </div><!-- end modal body -->
                                </div><!-- end modal content -->
                            </div><!-- end modal dialog -->
                        </div>
                    @endforeach
                @endif
                <div class="cs_height_40 cs_height_lg_40"></div>
                <div>
                    <ul class="cs_list cs_style_1 cs_mp_0 mt-20">
                        @if(!empty($career->job_descriptions))
                            @foreach($career->job_descriptions as $description)
                                <li>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_95_13)">
                                            <path
                                                d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z"
                                                fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_95_13">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $description }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Vacancy Section -->

    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/pp/10.jpg') }}"></section>
    <!-- End Page Heading Section -->
@endsection

@push('scripts')
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

{{-- preview both image and PDF --}}
<script>
    function candidateResumePreviewFile() {
        const fileInput = document.getElementById('candidate_resume_doc');
        const previewContainer = document.getElementById('preview-candidate-resume-container');
        const filePreview = document.getElementById('file-candidate-resume-preview');
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

@if ($errors->any())
    <script>
        $(document).ready(function() {
            // Check for the old job_id value from the previous request
            var oldJobId = {{ old('job_id') ?? 0 }};

            if (oldJobId) {
                // Show the corresponding job position form
                $('#job-position-' + oldJobId + '-form').modal('show');
            } else {
                // Show the first job position form
                $('#job-position-1-form').modal('show');
            }
        });
    </script>
@endif

<!-- Validate Name -->
<script>
    $(document).on('keypress', '#name', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

<!-- Validate Email -->
<script>
    $(document).ready(function() {
        // On form submission
        $('.cs_form').on('submit', function(event) {
            var emailField = $('#email');
            var emailValue = emailField.val();
            var regex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

            // Check if email matches the regex
            if (!regex.test(emailValue)) {
                event.preventDefault(); // Prevent form submission
                alert("Please enter a valid email address."); // Show error message
                emailField.focus(); // Focus back on the email field
                return false;
            }
        });
    });
</script>

<!-- Validate Mobile Number -->
<script>
    $(document).on('keypress', '#mobile_no', function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

<!-- Validate Department -->
<script>
    $(document).on('keypress', '#department', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

<!-- Validate Designation -->
<script>
    $(document).on('keypress', '#currentdesignation', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
</script>

@endpush
