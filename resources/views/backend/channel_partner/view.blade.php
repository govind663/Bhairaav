@extends('backend.layouts.master')

@section('title')
Bhairaav | Add Channel Partner
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
                        <h4>View Channel Partner</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.channel_partner') }}">Manage Channel Partner</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                View Channel Partner
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Company Name / Individual Name : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->companyNameOrIndividualName }}">
                    </div>

                    <label class="col-sm-2"><b>Name of the owner : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->nameOfTheOwner }}">
                    </div>
                </div>

                @php
                    $entity = [];
                    if($channelPartner->entity == 1){
                        $entity = 'Individual';
                    }elseif ($channelPartner->entity == 2) {
                        $entity = 'Private Ltd. Co.';
                    }elseif ($channelPartner->entity == 3) {
                        $entity = 'Public Ltd. Co.';
                    }elseif ($channelPartner->entity == 4) {
                        $entity = 'Proprietorship';
                    }elseif ($channelPartner->entity == 5) {
                        $entity = 'Partnership';
                    }elseif($channelPartner->entity == 6){
                        $entity = 'LLP';
                    }
                @endphp
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Entity : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $entity }}">
                    </div>

                    <label class="col-sm-2"><b>Office Address : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <textarea type="text" readonly class="form-control" value="{{ $channelPartner->officeAddress }}">{{ $channelPartner->officeAddress }}</textarea>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Tel No. : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="+91-{{ $channelPartner->telephoneNumber }}">
                    </div>

                    <label class="col-sm-2"><b>Mobile No. : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="+91-{{ $channelPartner->mobileNumber }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Website (Ex. http://google.com ) : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->website }}">
                    </div>

                    <label class="col-sm-2"><b>Email Id : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->emailId }}">
                    </div>
                </div>

                @php
                    $preferredExpertise = [];
                    if($channelPartner->preferredExpertise == 1){
                        $preferredExpertise = 'Residential';
                    }elseif ($channelPartner->preferredExpertise == 2) {
                        $preferredExpertise = 'Commercial';
                    }elseif ($channelPartner->preferredExpertise == 3) {
                        $preferredExpertise = 'Retail';
                    }elseif ($channelPartner->preferredExpertise == 4) {
                        $preferredExpertise = 'Industrial Land';
                    }elseif ($channelPartner->preferredExpertise == 5) {
                        $preferredExpertise = 'Other';
                    }
                @endphp
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Number of Years in Operation : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->numberOfYearsInOperation }}">
                    </div>

                    <label class="col-sm-2"><b>Expertise : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $preferredExpertise }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>PAN Card No. : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->panCardNo }}">
                    </div>

                    <label class="col-sm-2"><b>GST No. : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->gstNo }}">
                    </div>
                </div>

                @php
                    $brokerAffiliation = [];
                    if($channelPartner->brokerAffiliation == 1){
                        $brokerAffiliation = 'Yes';
                    }elseif ($channelPartner->brokerAffiliation == 2) {
                        $brokerAffiliation = 'No';
                    }
                @endphp
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>RERA No. : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->reraNo }}">
                    </div>

                    <label class="col-sm-2"><b>Affiliation to any Broker Association ? : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $brokerAffiliation }}">
                    </div>
                </div>

                @if($channelPartner->brokerAffiliation == 1)
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Channel Name : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->channel?->name }}">
                    </div>
                </div>
                @endif

                @php
                    $propertiesType = [];

                    if($channelPartner->propertiesType == 1){
                        $propertiesType = 'Goldcrest Residency';
                    }elseif ($channelPartner->propertiesType == 2) {
                        $propertiesType = 'Jewel of Queen';
                    }elseif ($channelPartner->propertiesType == 3) {
                        $propertiesType = 'TCP Corporate Park';
                    }elseif ($channelPartner->propertiesType == 4) {
                        $propertiesType = 'Bhairaav Milestone';
                    }elseif ($channelPartner->propertiesType == 3) {
                        $propertiesType = 'Other';
                    }

                    $authorizedSignatories = [];

                    if($channelPartner->authorizedSignatories == 1){
                        $authorizedSignatories = 'Single';
                    }elseif ($channelPartner->authorizedSignatories == 2) {
                        $authorizedSignatories = 'Jointly';
                    }elseif ($channelPartner->authorizedSignatories == 3) {
                        $authorizedSignatories = 'Anyone';
                    }
                @endphp
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Which of the Bhairaav's Properties are you interested in ? : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $propertiesType }}">
                    </div>

                    <label class="col-sm-2"><b>Authorised Signatories ? : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $authorizedSignatories }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Name : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->name }}">
                    </div>

                    <label class="col-sm-2"><b>Designation : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $channelPartner->designation }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Upload PAN Card : </b></label>
                    <div class="col-sm-4 col-md-4">
                        @if(!empty($channelPartner->pancard_doc))
                        <img src="{{ url('/') }}/bhairaav/channel_partner/pancard_doc/{{ $channelPartner->pancard_doc }}" alt="{{ $channelPartner->pancard_doc }}" style="height: 30% !important;">
                        @endif
                    </div>

                    <label class="col-sm-2"><b>Upload Aadhar Card : </b></label>
                    <div class="col-sm-4 col-md-4">
                        @if(!empty($channelPartner->aadhar_doc))
                        <img src="{{ url('/') }}/bhairaav/channel_partner/aadhar_doc/{{ $channelPartner->aadhar_doc }}" alt="{{ $channelPartner->aadhar_doc }}" style="height: 30% !important;">
                        @endif
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-8"><b>I agree to all Terms & Conditions for appointment as Bhairaav Group's Channel Partner.</b></label>

                    <div class="col-sm-2 col-md-2">
                        @if($channelPartner->terms == 1)
                            {{-- show radio button checked or not --}}
                            <input type="text" readonly class="form-control" value="Yes">
                        @else
                            <input type="text" readonly class="form-control" value="No">
                        @endif
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('admin.channel_partner') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
                        {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
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
@endpush
