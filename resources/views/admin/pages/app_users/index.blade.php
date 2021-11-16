@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Application users</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Application users</span>
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
                <h5 class="card-title">Search user</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body search-item">
                <form action="" method="get">
                    <div class="form-row">
                        <div class="form-group col-sm-2">
                            <label for="id">{{__('admin.id')}}</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="{{ __('admin.id') }}"
                                   value="{{request('id')}}">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="social_auth">{{__('admin.by_origin_auth')}}</label>
                            <select name="social_auth" class="select" id="social_auth">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($socialAuth as $socialAuthKey => $socialAuthVal)
                                    <option
                                        {{ request('social_auth') == $socialAuthKey ? 'selected' : '' }}  value="{{ $socialAuthKey }}">{{ $socialAuthVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="last_login">{{__('admin.last_login')}}</label>
                            <select name="last_login" class="select" id="last_login">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($lastLogin as $lastLoginKey => $lastLoginVal)
                                    <option
                                        {{ request('last_login') == $lastLoginKey ? 'selected' : '' }}  value="{{ $lastLoginKey }}">{{ $lastLoginVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="user_search">{{__('admin.all_inputs')}}</label>
                            <input type="text" class="form-control" name="user_search" id="user_search"
                                   placeholder="{{ __('admin.all_inputs') }}" value="{{request('user_search')}}">
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="{{$module_name}}.app_users.index"/>
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
                    Status: <br/>
                    <button class="btn btn-success status_all col-md-5" data-type="1"
                            data-url="{{ url('statusMultipleAppUsers') }}">
                        Enable Selected
                    </button>

                    <button class="btn btn-warning status_all col-md-5" data-type="2"
                            data-url="{{ url('statusMultipleAppUsers') }}">
                        Disable Selected
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleAppUsers') }}
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
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>FB</th>
                        <th>Twitter</th>
                        <th>Apple</th>
                        <th>Last login</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr id="tr_{{$user->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$user->id}}"></td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->facebook_id ?? '-' }}</td>
                            <td>{{ $user->twitter_id ?? '-' }}</td>
                            <td>{{ $user->apple_id ?? '-' }}</td>
                            <td>{{ $user->last_login ?? '-' }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <select name="status" id="status" data-user-id="{{ $user->id }}">
                                    @foreach($status as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $user->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="{{$module_name}}.app_users.edit" :id="$user->id"/>
                                    <x-delete route="{{$module_name}}.app_users.destroy" :id="$user->id"/>
                                    <a href="{{route($module_name.'.rating_review.index', ['user_id' => $user->id])}}" type="button" class="btn btn-success" data-popup="tooltip" data-placement="right" data-original-title="{{ __('admin.rating_review') }}"><i class="icon-star-full2"></i></a>
                                    <a href="{{route($module_name.'.loyalty_point.index', ['user_id' => $user->id])}}" type="button" class="btn btn-success" data-popup="tooltip" data-placement="right" data-original-title="{{ __('admin.loyalty_points') }}"><i class="icon-mailbox"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $users->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($users->currentPage() * config('global.pagination_count') >= $users->total()) ? ($users->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $users->total() : ($users->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $users->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $users->total() }}
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
            let user_id = $this.data('user-id');

            if (status > 0 && user_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this user!",
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
                            url: "{{ route($module_name.'.app_users.changeAppUserStatus') }}",
                            data: {status: status, user_id: user_id},
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
                                        text: "This user's status was changed successfully!",
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
                            url: "{{ route($module_name.'.app_users.destroyMultipleAppUser') }}",
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
                            url: "{{ route($module_name.'.app_users.statusMultipleAppUser') }}",
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
@stop
