@extends('backend.layouts.master')

@section('title')
Bhairaav | Manaage Projects List
@endsection

@push('styles')
<style>
    .flex-wrap {
        display: none !important;
    }
</style>
@endpush

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            @if ($status == 1)
                                <h4>Manaage Ongoing Projects List</h4>
                            @elseif ($status == 2)
                                <h4>Manaage Completed Projects List</h4>
                            @elseif ($status == 3)
                                <h4>Manaage Ongoing Projects List</h4>
                            @elseif ($status == 0)
                                <h4>Manaage Project List</h4>
                            @endif
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if ($status == 1)
                                        Manaage Ongoing Projects List
                                    @elseif ($status == 2)
                                        Manaage Completed Projects List
                                    @elseif ($status == 3)
                                        Manaage Ongoing Projects List
                                    @elseif ($status == 0)
                                        Manage Project List
                                    @endif
                                </li>
                            </ol>
                        </nav>
                    </div>

                    @if($status == 0)
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{ route('bhairaav_projects.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"> </i> Projects
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Export Datatable start -->
            <div class="card-box mb-30">

                <div class="pd-20">
                    @if ($status == 1)
                        <h4 class="text-blue h4">All Ongoing Projects List</h4>
                    @elseif ($status == 2)
                        <h4 class="text-blue h4">All Completed Projects List</h4>
                    @elseif ($status == 3)
                        <h4 class="text-blue h4">All Ongoing Projects List</h4>
                    @elseif ($status == 0)
                        <h4 class="text-blue h4">All Projects List</h4>
                    @endif
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export1 nowrap">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Project Name</th>
                                <th>Address</th>
                                <th>Configuration</th>
                                <th>Mobile Number</th>
                                <th>Project Image</th>
                                <th>Property Type</th>
                                <th class="no-export">Edit</th>
                                <th class="no-export">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $key => $value)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="text-wrap text-justify">{{ $value->project_name }}</td>
                                    <td class="text-wrap text-justify">{!! $value->address !!}</td>
                                    <td class="text-wrap text-justify">{{ $value->configuration }}</td>
                                    <td class="text-wrap text-justify">+91-{{ $value->mobile_no }}</td>

                                    <td class="text-wrap text-justify">
                                        @if (!empty($value->image))
                                            <a href="{{ url('/') }}/bhairaav/projects/bhairaav_projects/image/{{ $value->image }}"
                                                target="_blank" class="btn btn-primary btn-sm">
                                                <i class="micon dw dw-eye"></i> Document
                                            </a>
                                        @endif
                                    </td>

                                    @if ($value->property_type == 1)
                                        <td>Residential</td>
                                    @elseif($value->property_type == 2)
                                        <td>Commercial</td>
                                    @endif

                                    @if ($value->project_type == 1 || $value->project_type == 2 || $value->project_type == 3)
                                    <td class="no-export">
                                        <a href="{{ route('bhairaav_projects.edit', $value->id) }}">
                                            <button class="btn btn-warning btn-sm">
                                                <i class="micon dw dw-pencil-1"></i>
                                            </button>
                                        </a>
                                    </td>

                                    <td class="no-export">
                                        <form action="{{ route('bhairaav_projects.destroy', $value->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="status" id="status" type="hidden" value="{{ $value->status }}">
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete?')">
                                                <i class="micon dw dw-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>

        <!-- Footer Start -->
        <x-backend.footer />
        <!-- Footer Start -->
    </div>
@endsection

@push('scripts')
    <script>
        $('.data-table-export1').DataTable({
            scrollCollapse: true,
            autoWidth: true,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                // paginate: {
                //     next: '<i class="ion-chevron-right"></i>',
                //     previous: '<i class="ion-chevron-left"></i>'
                // }
            },
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    text: 'Copy',
                    className: 'btn btn-default',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
                {
                    extend: 'csv',
                    text: 'Excel',
                    className: 'btn btn-default',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    className: 'btn btn-default',
                    exportOptions: {
                        columns: ':not(.no-export)',
                    },
                    header: true,
                    title: 'All  Projects List',
                    orientation: 'landscape',
                    pageSize: 'A4',
                    customize: function(doc) {
                        doc.defaultStyle.fontSize = 16; //<-- set fontsize to 16 instead of 10
                        doc.defaultStyle.fontFamily = "sans-serif";
                        // doc.defaultStyle.font = 'Arial';

                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    className: 'btn btn-default',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
            ]
        });
    </script>
@endpush
