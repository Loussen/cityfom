@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Report types</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.report_type.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Report types</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Search type</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body search-item">
                <form action="" method="get">
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="name">{{__('admin.name')}}</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="{{ __('admin.name') }}" value="{{request('name')}}">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="status">{{__('admin.status')}}</label>
                            <select name="status" class="select" id="status">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($status as $statusKey => $statusVal)
                                    <option
                                        {{ request('status') == $statusKey ? 'selected' : '' }}  value="{{ $statusKey }}">{{ $statusVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="admin.report_type.index"/>
                            <x-clear/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <div class="card" style="zoom: 1;">
            <div class="card-header row">
                <div class="col-md-4 mr-1 mb-2 border p-1 rounded">
                    Status: <br />
                    <button class="btn btn-success status_all col-md-5" data-type="1"
                            data-url="{{ url('statusMultipleReportType') }}">
                        Enable Selected
                    </button>

                    <button class="btn btn-warning status_all col-md-5" data-type="2"
                            data-url="{{ url('statusMultipleReportType') }}">
                        Disable Selected
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleReportType') }}
                                ">Delete Selected
                    </button>
                </div>

            </div>

            <div class="table-responsive" style="">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="master"></th>
                        <th>#</th>
                        <th>Name (EN)</th>
                        <th>Name (AZ)</th>
                        <th>Name (ES)</th>
                        <th>Name (RU)</th>
                        <th>Not reviewed count</th>
                        <th>Under review count</th>
                        <th>Closed count</th>
                        <th>Total count</th>
                        <th>Order number</th>
                        <th>Status</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reportTypes as $reportType)
                        <tr id="tr_{{$reportType->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$reportType->id}}"></td>
                            <td>{{ $reportType->id }}</td>
                            <td>{{ $reportType->name_en }}</td>
                            <td>{{ $reportType->name_az }}</td>
                            <td>{{ $reportType->name_es }}</td>
                            <td>{{ $reportType->name_ru }}</td>
                            <td>{!! $reportType->not_reviewed > 0 ? "<a class='count_type' href='".route('admin.report_store.index',['status' => 1, 'type_id' => $reportType->id])."'>".$reportType->not_reviewed."</a>" : $reportType->not_reviewed !!}</td>
                            <td>{!! $reportType->under_review > 0 ? "<a class='count_type' href='".route('admin.report_store.index',['status' => 2, 'type_id' => $reportType->id])."'>".$reportType->under_review."</a>" : $reportType->under_review !!}</td>
                            <td>{!! $reportType->closed > 0 ? "<a class='count_type' href='".route('admin.report_store.index',['status' => 3, 'type_id' => $reportType->id])."'>".$reportType->closed."</a>" : $reportType->closed !!}</td>
                            <td>{!! $reportType->total > 0 ? "<a class='count_type' href='".route('admin.report_store.index',['type_id' => $reportType->id])."'>".$reportType->total."</a>" : $reportType->total !!}</td>
                            <td>{{ $reportType->reorder }}</td>
                            <td>
                                <select name="status" id="status" data-report-type-id="{{ $reportType->id }}">
                                    @foreach($status as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $reportType->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="admin.report_type.edit" :id="$reportType->id"/>
                                    <x-delete route="admin.report_type.destroy" :id="$reportType->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $reportTypes->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($reportTypes->currentPage() * config('global.pagination_count') >= $reportTypes->total()) ? ($reportTypes->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $reportTypes->total() : ($reportTypes->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $reportTypes->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $reportTypes->total() }}
                        </span>
            </div>
        </div>
        <!-- /basic table -->
    </div>
    <!-- /content area -->

@endsection
@section('script')
    <script>
        $('select#status').focus(function () {
            previous = $(this).val();
        }).on('change', function () {
            let $this = $(this);
            let status = $this.val();
            let report_type_id = $this.data('report-type-id');

            if (status > 0 && report_type_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this type!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ route('admin.report_type.changeReportTypeStatus') }}",
                            data: {status: status, report_type_id: report_type_id},
                            method: 'PUT',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: false,
                            success: function (data) {
                                if (data.response.status == 'OK') {
                                    swal.fire({
                                        title: 'Success',
                                        text: "This type's status was changed successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });
                                    $($this).val(data.response.status_type);
                                } else {
                                    swal.fire({
                                        title: 'Error',
                                        text: "System Error",
                                        type: 'warning',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-danger',
                                        buttonsStyling: false
                                    });
                                }
                            }
                        });
                    } else {
                        $($this).val(previous);
                    }
                });
            }
        });

        $('#master').on('click', function (e) {
            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            } else {
                $(".sub_chk").prop('checked', false);
            }
        });

        $('.delete_all').on('click', function (e) {

            let allVals = [];
            $(".sub_chk:checked").each(function () {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                swal.fire({
                    title: 'Error',
                    text: "Please select row.",
                    type: 'warning',
                    confirmButtonText: 'OK',
                    confirmButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                });
            } else {
                swal.fire({
                    title: 'Alert',
                    text: "Are you sure you want to delete these rows?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function (result) {
                    if (result.value) {
                        let join_selected_values = allVals.join(",");

                        $.ajax({
                            url: "{{ route('admin.report_type.destroyMultipleReportType') }}",
                            data: {ids: join_selected_values},
                            method: 'DELETE',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: false,
                            success: function (data) {
                                if (data.response.status == 'OK') {
                                    $(".sub_chk:checked").each(function () {
                                        $(this).parents("tr").remove();
                                    });
                                    swal.fire({
                                        title: 'Success',
                                        text: "These rows was deleted successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });

                                } else {
                                    swal.fire({
                                        title: 'Error',
                                        text: "System Error",
                                        type: 'warning',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-danger',
                                        buttonsStyling: false
                                    });
                                }
                            }
                        });
                    }

                    $.each(allVals, function (index, value) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                });
            }
        });

        $('.status_all').on('click', function (e) {

            let allVals = [];
            let status = $(this).attr('data-type');
            $(".sub_chk:checked").each(function () {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                swal.fire({
                    title: 'Error',
                    text: "Please select row.",
                    type: 'warning',
                    confirmButtonText: 'OK',
                    confirmButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                });
            } else {
                swal.fire({
                    title: 'Alert',
                    text: "Are you sure you want change status these rows?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function (result) {
                    if (result.value) {
                        let join_selected_values = allVals.join(",");

                        $.ajax({
                            url: "{{ route('admin.report_type.statusMultipleReportType') }}",
                            data: {ids: join_selected_values, status: status},
                            method: 'PUT',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: false,
                            success: function (data) {
                                if (data.response.status == 'OK') {
                                    $(".sub_chk:checked").each(function () {
                                        $(this).parents("tr").find('select#status').val(data.response.status_type);
                                    });
                                    swal.fire({
                                        title: 'Success',
                                        text: "These rows was changed status successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });

                                } else {
                                    swal.fire({
                                        title: 'Error',
                                        text: "System Error",
                                        type: 'warning',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-danger',
                                        buttonsStyling: false
                                    });
                                }
                            }
                        });
                    }
                });
            }
        });

    </script>

    <style>
        a.count_type
        {
            text-decoration: underline;
            background-color: #4caf50;
            color: #fff;
            padding: 5px;
        }
    </style>
@stop
