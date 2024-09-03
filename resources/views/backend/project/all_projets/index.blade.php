@extends('backend.layouts.master')

@section('title')
Bhairaav | Manaage  Projects
@endsection

@push('styles')
<style>
    .dataTables_length, .dt-buttons, div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 15px !important;
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
                        <h4>Manage  Projects</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Manage  Projects
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{ route('bhairaav_projects.create') }}">
                            <i class="fa fa-plus" aria-hidden="true"> </i>  Projects
                        </a>

                    </div>
                </div>
            </div>
        </div>        

        <!-- Export Datatable start -->
        <div class="card-box mb-30">
            
            <div class="pd-20">
                <div class="pd-20">
                    <h4 class="text-blue h4">All  Projects List</h4>
                </div>
                <div class="tab">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#ongoing_projects" role="tab" aria-selected="true"><b>Ongoing</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#completed_projects" role="tab" aria-selected="false"><b>Completed</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#upcoming_projects" role="tab" aria-selected="false"><b>Upcoming</b></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="ongoing_projects" role="tabpanel">
                            <table class="table hover multiple-select-row data-table-export1 nowrap ">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Project Name</th>
                                        <th>Address</th>
                                        <th>Configuration</th>
                                        <th>Mobile Number</th>
                                        <th>Project Image</th>
                                        <th>Project Type</th>
                                        <th class="no-export">Edit</th>
                                        <th class="no-export">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td class="text-wrap text-justify">{{ $value->project_name }}</td>
                                        <td class="text-wrap text-justify">{{ $value->address }}</td>
                                        <td class="text-wrap text-justify">{{ $value->configuration }}</td>
                                        <td class="text-wrap text-justify">{{ $value->mobile_no }}</td>
                                        <td class="text-wrap text-justify">
                                            @if(!empty($value->image))
                                                <a href="{{url('/')}}/bhairaav/projects/completed_projects/image/{{ $value->image }}" target="_blank" class="btn btn-primary btn-sm">
                                                    <i class="micon dw dw-eye"></i> Document
                                                </a>
                                            @endif
                                        </td>
                                        @if($value->project_type == 1)
                                        <td>Residential</td>
                                        @elseif($value->project_type == 2)
                                        <td>Commercial</td>
                                        @endif
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
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="micon dw dw-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="completed_projects" role="tabpanel">
                            <table class="table hover multiple-select-row data-table-export2 nowrap ">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Project Name</th>
                                        <th>Address</th>
                                        <th>Configuration</th>
                                        <th>Mobile Number</th>
                                        <th>Project Image</th>
                                        <th>Project Type</th>
                                        <th class="no-export">Edit</th>
                                        <th class="no-export">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td class="text-wrap text-justify">{{ $value->project_name }}</td>
                                        <td class="text-wrap text-justify">{{ $value->address }}</td>
                                        <td class="text-wrap text-justify">{{ $value->configuration }}</td>
                                        <td class="text-wrap text-justify">{{ $value->mobile_no }}</td>
                                        <td class="text-wrap text-justify">
                                            @if(!empty($value->image))
                                                <a href="{{url('/')}}/bhairaav/projects/completed_projects/image/{{ $value->image }}" target="_blank" class="btn btn-primary btn-sm">
                                                    <i class="micon dw dw-eye"></i> Document
                                                </a>
                                            @endif
                                        </td>
                                        @if($value->project_type == 1)
                                        <td>Residential</td>
                                        @elseif($value->project_type == 2)
                                        <td>Commercial</td>
                                        @endif
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
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="micon dw dw-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="upcoming_projects" role="tabpanel">
                            <table class="table hover multiple-select-row data-table-export3 nowrap ">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Project Name</th>
                                        <th>Address</th>
                                        <th>Configuration</th>
                                        <th>Mobile Number</th>
                                        <th>Project Image</th>
                                        <th>Project Type</th>
                                        <th class="no-export">Edit</th>
                                        <th class="no-export">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td class="text-wrap text-justify">{{ $value->project_name }}</td>
                                        <td class="text-wrap text-justify">{{ $value->address }}</td>
                                        <td class="text-wrap text-justify">{{ $value->configuration }}</td>
                                        <td class="text-wrap text-justify">{{ $value->mobile_no }}</td>
                                        <td class="text-wrap text-justify">
                                            @if(!empty($value->image))
                                                <a href="{{url('/')}}/bhairaav/projects/completed_projects/image/{{ $value->image }}" target="_blank" class="btn btn-primary btn-sm">
                                                    <i class="micon dw dw-eye"></i> Document
                                                </a>
                                            @endif
                                        </td>
                                        @if($value->project_type == 1)
                                        <td>Residential</td>
                                        @elseif($value->project_type == 2)
                                        <td>Commercial</td>
                                        @endif
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
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="micon dw dw-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "info": "_START_-_END_ of _TOTAL_ entries",
            searchPlaceholder: "Search",
            // paginate: {
            //     next: '<i class="ion-chevron-right"></i>',
            //     previous: '<i class="ion-chevron-left"></i>'
            // }
        },
        dom: 'Bfrtip',
        buttons: [
            {
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
               title: 'All Ongoing Projects List',
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

<script>
    $('.data-table-export2').DataTable({
        scrollCollapse: true,
        autoWidth: true,
        responsive: true,
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "info": "_START_-_END_ of _TOTAL_ entries",
            searchPlaceholder: "Search",
            // paginate: {
            //     next: '<i class="ion-chevron-right"></i>',
            //     previous: '<i class="ion-chevron-left"></i>'
            // }
        },
        dom: 'Bfrtip',
        buttons: [
            {
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
               title: 'All Completed Projects List',
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

<script>
    $('.data-table-export3').DataTable({
        scrollCollapse: true,
        autoWidth: true,
        responsive: true,
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "info": "_START_-_END_ of _TOTAL_ entries",
            searchPlaceholder: "Search",
            // paginate: {
            //     next: '<i class="ion-chevron-right"></i>',
            //     previous: '<i class="ion-chevron-left"></i>'
            // }
        },
        dom: 'Bfrtip',
        buttons: [
            {
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
               title: 'All Upcoming Projects List',
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
