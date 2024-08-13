@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Refer a friend
@endsection

@push('styles')
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/17050.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Refer a friend</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Payment Section -->
    <section>
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="alliances-sec">
                    <h2 class="cs_fs_38 cs_mb_20">
                        Our Prestigious Alliances - Channel Partner
                    </h2>
                    <p>Partnership leads to Win-Win. We believe in the power of synergy and mutual growth.</p>
                    <p>Please fill in the form below to partner with the Bhairaav Group.</p>
                </div>

                <div>


                    <div class="row cs_gap_y_20">
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Company Name/ Individual Name*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Name of the owner*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">Entity</h4>
                            <ul class="cs_payment_method_list cs_primary_color cs_payment_method_list">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Individual</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Private Ltd. Co.</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label> Public Ltd. Co.
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Proprietorship</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Partnership</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>LLP</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">Office Address*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">Tel No.</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">Mobile No.</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">Website (Ex. http://google.com )</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Email Id*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Number of Years in Operation*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                Preferred Expertise*
                            </h4>
                            <ul class="cs_payment_method_list cs_primary_color cs_payment_method_list">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Residential</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Commercial</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label> Retail
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label> Industrial Land
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod" id="debitCardRadio">
                                        <label class="cs_fs_16 mb-0">Other
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">PAN No.*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">GST No.*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-4">
                            <h4 class="cs_fs_16 cs_bold mb-0">RERA No.*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                Do you have Affiliation to any Broker Association ?*
                            </h4>
                            <ul class="cs_payment_method_list cs_primary_color cs_payment_method_list">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Yes</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>No</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                Which of the Bhairaav's Properties are you interested in ?*
                            </h4>
                            <ul class="cs_payment_method_list cs_primary_color cs_payment_method_list">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Goldcrest Residency</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Jewel of Queen</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>TCP Corporate Park</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Bhairaav Milestone</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Other</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="cs_fs_16 cs_bold mb-0">
                                Are you Authorised Signatories ?*
                            </h4>
                            <ul class="cs_payment_method_list cs_primary_color cs_payment_method_list">
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Single</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Jointly</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_radiobox">
                                        <input type="radio" name="paymentMethod">
                                        <label>Anyone</label>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Name*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Designation*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Name*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Designation*</h4>
                            <input type="text" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">PAN Card*</h4>
                            <input type="file" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="col-sm-6">
                            <h4 class="cs_fs_16 cs_bold mb-0">Aadhar Card*</h4>
                            <input type="file" class="cs_form_field_2 cs_radius_20">
                        </div>
                        <div class="cs_mb_15">
                            <div class="cs_checkbox">
                                <input type="checkbox">
                                <label>
                                    I agree to all Terms & Conditions for appointment as Bhairaav Group's Channel Partner.
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="cs_btn cs_style_2 mt-2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
                        <b>Submit</b>
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
                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Payment Section -->
@endsection

@push('scripts')
@endpush
