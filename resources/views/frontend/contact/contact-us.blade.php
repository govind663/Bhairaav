@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Contact Us
@endsection

@push('styles')
<style>
    .is-invalid {
        border-color: #dc3545; /* Bootstrap's red color for errors */
    }

    .invalid-feedback {
        color: #dc3545; /* Match the border color */
        font-size: 0.875em; /* Adjust font size as needed */
    }
</style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/259.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Contact Us</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Contact Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="col-lg-6">
                    <div class="cs_pr_100">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                                We're here for all your queries
                            </p>
                            <h2 class="cs_fs_50 cs_bold">
                                Contact Us
                            </h2>
                        </div>
                        <div class="cs_height_10 cs_height_lg_10"></div>
                        <form method="POST" action="{{ route('store-contact-us') }}" class="cs_form cs_style_2" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            <div class="col-sm-12 mb-3">
                                {{-- <label class="cs_height_16 cs_height_lg_16"><b>Full Name : <span class="text-danger">*</span></b></label> --}}
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name *">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                {{-- <label class="cs_height_16 cs_height_lg_16"><b>Email Id : <span class="text-danger">*</span></b></label> --}}
                                <input type="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email Id *">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                {{-- <label class="cs_height_16 cs_height_lg_16"><b>Phone No. : <span class="text-danger">*</span></b></label> --}}
                                <input type="text" maxlength="10" class="cs_form_field_2 cs_radius_20 @error('phone_no') is-invalid @enderror" name="phone_no" id="phone_no" value="{{ old('phone_no') }}" placeholder="Phone No. *">
                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                {{-- <label class="cs_height_16 cs_height_lg_16"><b>Subject : <span class="text-danger">*</span></b></label> --}}
                                <input type="text" class="cs_form_field_2 cs_radius_20 @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject *">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                {{-- <label class="cs_height_16 cs_height_lg_16"><b>Message : </b></label> --}}
                                <textarea cols="30"  rows="5" class="cs_form_field_2 cs_radius_20 @error('message') is-invalid @enderror" name="message" id="message" value="{{ old('message') }}" placeholder="Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15" type="submit">
                                <b>Send Message</b>
                                <span>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                fill="currentColor">
                                            </path>
                                        </svg>
                                    </i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info cs_image_layer cs_style_3 position-relative">
                        <img src="{{ asset('frontend/assets/img/contact/img-2.jpg') }}" alt="Contact" class="cs_radius_5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Contact Info -->
    <section>
        <div class="cs_height_80 cs_height_lg_72"></div>
        <div class="container">
            <div class="cs_contact_info_boxes">
                <div class="cs_contact_info_box">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_center rounded-circle">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon_2.svg') }}" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_fs_16 cs_bold cs_mb_5">For New Sales reach us on</h3>
                            <p class="mb-0">
                                <a href="mailto:sales@bhairaav.com">sales@bhairaav.com</a>
                            </p>
                            <p class="mb-0">
                                {{-- <a href="tel:90711 23428">+91 7353955395</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cs_contact_info_box">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_center rounded-circle">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon_2.svg') }}" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_fs_16 cs_bold cs_mb_5">Existing Customers reach us on</h3>
                            <p class="mb-0">
                                <a href="mailto:customercare@bhairaav.com">customercare@bhairaav.com</a>
                            </p>
                            <p class="mb-0">
                                {{-- <a href="tel:90710 16166">+91 7353955395</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cs_contact_info_box">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_center rounded-circle">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon_2.svg') }}" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_fs_16 cs_bold cs_mb_5">Mail Us</h3>
                            <p class="mb-0">
                                <a href="mailto:info@bhairaav.com">info@bhairaav.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_80"></div>
    </section>

    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="{{ asset('frontend/assets/img/projects/milestone-2.jpg') }}">
    </section>

    <!-- End Contact Info -->
    <div class="location-area sp2">
        <div class="cs_height_70 cs_height_lg_72"></div>

        <div class="container">
            <div class="row">
                <div class="cs_section_heading text-center cs_style_1">
                    <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_10 cs_mb_lg_15 text-uppercase">
                        We're here for all your queries
                    </p>
                    <h2 class="cs_fs_50 cs_bold">
                        Contact Information
                    </h2>
                </div>
            </div>
            <div class="cs_height_20 cs_height_lg_20"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="location-boxes">
                        <div class="img1">
                            <img src="{{ asset('frontend/assets/img/icons/placeholder.png') }}" alt="">
                        </div>
                        <div class="space32"></div>
                        <h3>Mumbai Corporate Office </h3>
                        <p>
                            1003, 10th Floor, Raheja Center,
                            Free Press Journal Marg,
                            Nariman Point - 400021
                        </p>
                        <a href="tel:022-2204 7666">
                            Tel.: 022-2204 7666
                        </a>
                        <a target="_blank"
                            href="https://www.google.com/maps/place/Raheja+Centre,+Free+Press+Journal+Marg,+Nariman+Point,+Mumbai,+Maharashtra+400021/@18.9235599,72.8211563,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7d1ebeae6c7f7:0xb652e869c16999c8!8m2!3d18.9235599!4d72.823345?shorturl=1"
                            class="map" target="_blank">
                            View on Map
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="cs_height_40 cs_height_lg_72"></div>

    </div>

    <!-- Start Google Map Section -->
    <div class="cs_google_map cs_style_1">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.1769577395867!2d72.823345!3d18.9235599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1ebeae6c7f7%3A0xb652e869c16999c8!2sRaheja%20Centre%2C%20RAHEJA%20CHAMBERS%2C%20Free%20Press%20Journal%20Marg%2C%20Nariman%20Point%2C%20Mumbai%2C%20Maharashtra%20400021!5e0!3m2!1sen!2sin!4v1722925644444!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- End Google Map Section -->
@endsection

@push('scripts')
@endpush
