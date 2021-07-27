@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Roles</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.roles.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Roles</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <div class="card" style="zoom: 1;">
            <div class="card-header row">

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleRole') }}
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
                        <th>Name</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr id="tr_{{$role->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$role->id}}"></td>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="admin.roles.edit" :id="$role->id"/>
                                    <x-delete route="admin.roles.destroy" :id="$role->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $roles->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($roles->currentPage() * config('global.pagination_count') >= $roles->total()) ? ($roles->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $roles->total() : ($roles->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $roles->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $roles->total() }}
                        </span>
            </div>
        </div>
        <!-- /basic table -->
    </div>
    <!-- /content area -->

@endsection
@section('script')
    <script>
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
                            url: "{{ route('admin.roles.destroyMultipleRole') }}",
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

        $('#master').on('click', function (e) {
            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            } else {
                $(".sub_chk").prop('checked', false);
            }
        });
    </script>
@stop
