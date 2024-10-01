@extends('backend.layouts.master')

@section('title')
Bhairaav | Edit Privacy Policy
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
                        <h4>Edit Privacy Policy</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('privacy_policies.index') }}">Manage Privacy Policy</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Privacy Policy
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <form method="POST" action="{{ route('privacy_policies.update', $privacyPolicy->id) }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <input type="text" id="id" name="id" hidden value="{{ $privacyPolicy->id }}">

            <div class="pd-20 card-box mb-30">
                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Introduction : <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="introduction" name="introduction" class="form-control border-radius-0 @error('introduction') is-invalid @enderror" placeholder="Enter introduction ...">{{ old('introduction', $privacyPolicy->introduction) }}</textarea>
                        @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>We May Collect And Process The Following Data About You : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3" id="dataCollectionTable">
                        <tbody>
                            @foreach(old('data_collection', $privacyPolicy->data_collection ?? []) as $key => $data)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12 mb-3">
                                            <textarea id="data_collection_{{ $key }}" name="data_collection[]" class="form-control border-radius-0 @error('data_collection.*') is-invalid @enderror" placeholder="Enter Data Collection ...">{{ $data }}</textarea>
                                            @error('data_collection.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger removeDatacollectionRow">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>Use of the information : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3"  id="useOfInformationTable">
                        <tbody>
                            @foreach(old('use_of_information', $privacyPolicy->use_of_information ?? []) as $key => $info)
                                <tr>
                                    <td>
                                        <div class="col-sm-12 col-md-12 mb-3">
                                            <textarea  id="use_of_information_{{ $key }}" name="use_of_information[]" class="form-control border-radius-0 @error('use_of_information.*') is-invalid @enderror" placeholder="Enter Data Collection ..." value="{{ $info }}">
                                                {{ $info }}
                                            </textarea>
                                            @error('use_of_information.*')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger removeUseOfInformationRow">Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>Closure of your information : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3"  id="closureOfInformationTable">
                        <tbody>
                            @foreach(old('closure_of_information', $privacyPolicy->closure_of_information ?? []) as $key => $info)
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12 mb-3">
                                        <textarea  id="closure_of_information_{{ $key }}" name="closure_of_information[]" class="form-control border-radius-0 @error('closure_of_information.*') is-invalid @enderror" placeholder="Enter Closure of your information ..." value="{{ $info }}">
                                            {{ $info }}
                                        </textarea>
                                        @error('closure_of_information.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger removeClosureOfInformationRow">Remove</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>We store your personal data : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3"  id="dataStorageTable">
                        <tbody>
                            @foreach(old('data_storage', $privacyPolicy->data_storage ?? []) as $key => $data)
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12 mb-3">
                                        <textarea  id="data_storage_{{ $key }}" name="data_storage[]" class="form-control border-radius-0 @error('data_storage.*') is-invalid @enderror" placeholder="Enter We store your personal data ..." value="{{ $data }}">
                                            {{ $data }}
                                        </textarea>
                                        @error('data_storage.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger removeDataStorageRow">Remove</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Cookies :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="cookies" name="cookies" class="form-control border-radius-0 @error('cookies') is-invalid @enderror" placeholder="Enter Cookies ..." value="{{ $privacyPolicy->cookies }}">{{ $privacyPolicy->cookies }}</textarea>
                        @error('cookies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><b>Our Rights : <span class="text-danger">*</span></b></label>
                    <table class="col-sm-12 col-md-12 p-3"  id="rightsTable">
                        <tbody>
                            @foreach(old('rights', $privacyPolicy->rights ?? []) as $key => $data)
                            <tr>
                                <td>
                                    <div class="col-sm-12 col-md-12 mb-3">
                                        <textarea  id="rights_{{ $key }}" name="rights[]" class="form-control border-radius-0 @error('rights.*') is-invalid @enderror" placeholder="Enter Our Rights ..." value="{{ $data }}">
                                            {{ $data }}
                                        </textarea>
                                        @error('rights.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger removeRightsRow">Remove</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-12"><strong>Changes to our privacy policy :  <span class="text-danger">*</span></strong></label>
                    <div class="col-sm-12 col-md-12">
                        <textarea id="changing_privacy_policy" name="changing_privacy_policy" class="form-control border-radius-0 @error('changing_privacy_policy') is-invalid @enderror" placeholder="Enter Changes to our privacy policy ..." value="{{ $privacyPolicy->changing_privacy_policy }}">{{ $privacyPolicy->changing_privacy_policy }}</textarea>
                        @error('changing_privacy_policy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <label class="col-md-3"></label>
                    <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                        <a href="{{ route('privacy_policies.index') }}" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;
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
{{-- Add More Datacollection --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addDataCollectionRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="data_collection" name="data_collection[]" class="form-control border-radius-0 @error('data_collection.*') is-invalid @enderror" placeholder="Enter Data Collection ..." value="{{ old('data_collection.0') }}">
                            {{ old('data_collection.0') }}
                        </textarea>
                        @error('data_collection.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeDatacollectionRow">Remove</button></td>
            </tr>`;
            $('#dataCollectionTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeDatacollectionRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Use Of Information --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addUseOfInformationRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="use_of_information" name="use_of_information[]" class="form-control border-radius-0 @error('use_of_information.*') is-invalid @enderror" placeholder="Enter Data Collection ..." value="{{ old('use_of_information.0') }}">
                            {{ old('use_of_information.0') }}
                        </textarea>
                        @error('use_of_information.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeUseOfInformationRow">Remove</button></td>
            </tr>`;
            $('#useOfInformationTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeUseOfInformationRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Closure of your information --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addClosureOfInformationRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="closure_of_information" name="closure_of_information[]" class="form-control border-radius-0 @error('closure_of_information.*') is-invalid @enderror" placeholder="Enter Closure of your information ..." value="{{ old('closure_of_information.0') }}">
                            {{ old('closure_of_information.0') }}
                        </textarea>
                        @error('closure_of_information.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeClosureOfInformationRow">Remove</button></td>
            </tr>`;
            $('#closureOfInformationTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeClosureOfInformationRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Data Storage --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addDataStorageRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="data_storage" name="data_storage[]" class="form-control border-radius-0 @error('data_storage.*') is-invalid @enderror" placeholder="Enter We store your personal data ..." value="{{ old('data_storage.0') }}">
                            {{ old('data_storage.0') }}
                        </textarea>
                        @error('data_storage.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeDataStorageRow">Remove</button></td>
            </tr>`;
            $('#dataStorageTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeDataStorageRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>

{{-- Add More Rights --}}
<script>
    $(document).ready(function () {
        // Add a new row with validation
        $('#addRightsRow').click(function () {
            var newRow = `<tr>
                <td>
                    <div class="col-sm-12 col-md-12 mb-3">
                        <textarea  id="rights" name="rights[]" class="form-control border-radius-0 @error('rights.*') is-invalid @enderror" placeholder="Enter Our Rights ..." value="{{ old('rights.0') }}">
                            {{ old('rights.0') }}
                        </textarea>
                        @error('rights.*')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
                <td><button type="button" class="btn btn-danger removeRightsRow">Remove</button></td>
            </tr>`;
            $('#rightsTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeRightsRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush