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
                        <h4>View Member Detail Partner</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.member_details') }}">Manage Member Detail Partner</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                View Member Detail Partner
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>


        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">

            <div class="pd-20 card-box mb-30">
                <h4 class="text-blue h4">Member Details</h4>
                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>First Name : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->f_name }}">
                    </div>

                    <label class="col-sm-2"><b>Last name : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->l_name }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Mobile Number : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->mobile_no }}">
                    </div>

                    <label class="col-sm-2"><b>Email Id : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->email }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2"><b>Project : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->project_id }}">
                    </div>

                    <label class="col-sm-2"><b>Unit / Flat Number : </b></label>
                    <div class="col-sm-4 col-md-4">
                        <input type="text" readonly class="form-control" value="{{ $member->unit_or_flat }}">
                    </div>
                </div>

                <h4 class="text-blue h4">Referral Details</h4>

                @foreach ($combinedReferralDetails as $key => $referral)
                    <div class="form-group row mt-3">
                        <label class="col-sm-1 text-right">
                            <b>
                                {{ $key + 1 }}
                            </b>
                        </label>
                        <div class="col-sm-3 col-md-3">
                            <input type="text" readonly class="form-control" value="{{ $referral['refer_f_name'] ?? '' }}">
                        </div>

                        <div class="col-sm-2 col-md-2">
                            <input type="text" readonly class="form-control" value="{{ $referral['refer_l_name'] ?? '' }}">
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <input type="text" readonly class="form-control" value="{{ $referral['refer_email'] ?? '' }}">
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <input type="text" readonly class="form-control" value="{{ $referral['refer_relation'] ?? '' }}">
                        </div>
                    </div>
                @endforeach


                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('admin.member_details') }}" class="btn btn-danger">Cancel</a>
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
