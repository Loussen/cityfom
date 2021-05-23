@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Loyalty points</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.loyalty_point.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Loyalty points</span>
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
                <h5 class="card-title">Search loyalty point</h5>
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
                            <label for="store_id">{{__('admin.store')}}</label>
                            <select name="store_id" class="select-search" id="store_id">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($stores as $store)
                                    <option
                                        {{ request('store_id') == $store->id ? 'selected' : '' }}  value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="user_id">{{__('admin.user')}}</label>
                            <select name="user_id" class="select-search" id="user_id">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($users as $user)
                                    <option
                                        {{ request('user_id') == $user->id ? 'selected' : '' }}  value="{{ $user->id }}">{{ $user->firstname." ".$user->lastname." - ".$user->email }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="admin.loyalty_point.index"/>
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

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleLoyaltyPoint') }}
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
                        <th>User</th>
                        <th>Store</th>
                        <th>Points</th>
                        <th>Created at</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loyaltyPoints as $loyaltyPoint)
                        <tr id="tr_{{$loyaltyPoint->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$loyaltyPoint->id}}"></td>
                            <td>{{ $loyaltyPoint->id }}</td>
                            <td>{{ $loyaltyPoint->firstname." ".$loyaltyPoint->lastname." - ".$loyaltyPoint->email }}</td>
                            <td>{{ $loyaltyPoint->store_name }}</td>
                            <td>{{ $loyaltyPoint->current }}</td>
                            <td>{{ $loyaltyPoint->created_at }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn btn-success mr-2" data-id="{{$loyaltyPoint->id}}" id="point_history"><i class="icon-history"></i> {{ __('admin.history') }}</button>
                                    <x-delete route="admin.loyalty_point.destroy" :id="$loyaltyPoint->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $loyaltyPoints->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($loyaltyPoints->currentPage() * config('global.pagination_count') >= $loyaltyPoints->total()) ? ($loyaltyPoints->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $loyaltyPoints->total() : ($loyaltyPoints->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $loyaltyPoints->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $loyaltyPoints->total() }}
                        </span>
            </div>
        </div>
        <!-- /basic table -->
    </div>
    <!-- /content area -->

@endsection
@section('script')
    <script>

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
                            url: "{{ route('admin.loyalty_point.destroyMultipleLoyaltyPoint') }}",
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

        $('button#point_history').click(function () {

            let dataHistory = "<table class='table table-bordered mt-3'><thead>" +
                "<tr><th>#</th><th>Previous points</th><th>Current Points</th><th>Created_at</th></tr></thead><tbody>";

            let dataHistoryHead = "<table class='table table-bordered mt-3'><thead>" +
                "<tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Store</th></tr></thead><tbody>";

            $.ajax({
                url: "{{ route('admin.loyalty_point.pointHistory') }}",
                data: {point_id : $(this).data('id')},
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                async: false,
                success: function(data) {
                    if(data.response.status == 'OK') {

                        let i = 1;
                        $.each(data.response.data, function( index, value ) {
                            dataHistory += "<tr><td>"+i+"</td><td>"+value["previous"]+"</td><td>"+value["current"]+"</td><td>"+value['created_at']+"</td></tr>";

                            i++;
                        });

                        dataHistoryHead += "<tr><td>"+data.response.data[0]['user_id']+"</td><td>"+data.response.data[0]['firstname']+"</td><td>"+data.response.data[0]['lastname']+"</td><td>"+data.response.data[0]['email']+"</td><td>"+data.response.data[0]['store_name']+"</td></tr></tbody></table>";

                        dataHistory += "</tbody></table>";

                        swal.fire({
                            title: "Loyalty point history",
                            html: dataHistoryHead+" "+dataHistory,
                            type: 'info',
                            confirmButtonText: 'OK',
                            confirmButtonClass: 'btn btn-success',
                            buttonsStyling: false,
                            width: '60%'
                        });
                    } else {
                        swal.fire({
                            title: 'Xəta',
                            text: "Sistem xətası",
                            type: 'warning',
                            confirmButtonText: 'OK',
                            confirmButtonClass: 'btn btn-danger',
                            buttonsStyling: false
                        });
                    }
                }
            });
        });

    </script>
@stop
