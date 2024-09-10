<div class="adminActions">
    <input type="checkbox" name="adminToggle" class="adminToggle" />
    <a class="adminButton" href="#!">
        <i class="fa fa-cog"></i>
    </a>
    <div class="adminButtons">
        <a aria-label="Chat on WhatsApp" href=" https://wa.me/9071123428" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="tel:+222-4454-6789">
            <i class="fa fa-phone"></i>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-envelope"></i>
        </a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true"><!-- start report input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="staticBackdropLabel">Register Your Interest
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body space-y-20 p-40">
                <!-- <h3>Register your interest</h3> -->
                <form method="POST" action="{{ route('store-contact-us') }}" class="cs_form cs_style_2" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                    <div class="col-sm-12">
                        <label class="cs_height_16 cs_height_lg_16"><b>Full Name : <span class="text-danger">*</span></b></label>
                        <input type="text" class="cs_form_field_2 cs_radius_10 @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Full Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <label class="cs_height_16 cs_height_lg_16"><b>Email Id : <span class="text-danger">*</span></b></label>
                        <input type="email" class="cs_form_field_2 cs_radius_10 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email Id">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <label class="cs_height_16 cs_height_lg_16"><b>Phone No. : <span class="text-danger">*</span></b></label>
                        <input type="text" maxlength="10" class="cs_form_field_2 cs_radius_10 @error('phone_no') is-invalid @enderror" name="phone_no" id="phone_no" value="{{ old('phone_no') }}" placeholder="Enter Phone No.">
                        @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <label class="cs_height_16 cs_height_lg_16"><b>Subject : <span class="text-danger">*</span></b></label>
                        <input type="text" class="cs_form_field_2 cs_radius_10 @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Enter Subject.">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <label class="cs_height_16 cs_height_lg_16"><b>Message : </b></label>
                        <textarea cols="30"  rows="5" class="cs_form_field_2 cs_radius_10 @error('message') is-invalid @enderror" name="message" id="message" value="{{ old('message') }}" placeholder="Enter Message">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <button class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_10 cs_fs_15" type="submit">
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
            </div><!-- end modal body -->
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div>
