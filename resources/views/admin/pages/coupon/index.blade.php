@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Coupons</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route($module_name.'.coupon.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Coupons</span>
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
                <h5 class="card-title">Search coupon</h5>
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
                            <label for="title">{{__('admin.title')}}</label>
                            <input type="text" class="form-control" name="title" id="title"
                                   placeholder="{{ __('admin.title') }}" value="{{request('title')}}">
                        </div>
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
                            <x-showall route="{{$module_name}}.coupon.index"/>
                            <x-clear/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <a class="btn btn-info legitRipple col-md-2 mr-2 mb-2"
           href="{{ route($module_name.'.coupon.index',['redeem_count' => $redeemCount == 'ASC' ? 'DESC' : 'ASC']) }}">
            {!! $redeemCount == 'ASC' ? "<i class='icon-arrow-up-left2'></i>" : "<i class='icon-arrow-down-left2'></i>" !!}
            Sorting by redeem count
        </a>
        <div class="card" style="zoom: 1;">
            <div class="card-header row">
                <div class="col-md-4 mr-1 mb-2 border p-1 rounded">
                    Status: <br />
                    <button class="btn btn-success status_all col-md-5" data-type="1"
                            data-url="{{ url('statusMultipleCoupon') }}">
                        Enable Selected
                    </button>

                    <button class="btn btn-warning status_all col-md-5" data-type="2"
                            data-url="{{ url('statusMultipleCoupon') }}">
                        Disable Selected
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleCoupon') }}
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
                        <th>Title</th>
                        <th>Store</th>
                        <th>Discount</th>
                        <th>Valid from</th>
                        <th>Valid to</th>
                        <th>Image</th>
                        <th>Redeem Count</th>
                        <th>Status</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coupons as $coupon)
                        <tr id="tr_{{$coupon->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$coupon->id}}"></td>
                            <td>{{ $coupon->id }}</td>
                            <td>{{ $coupon->title }}</td>
                            <td>{{ $coupon->s_name }}</td>
                            <td>{{ $coupon->discount }} %</td>
                            <td>{{ $coupon->valid_from }}</td>
                            <td>{{ $coupon->valid_to }}</td>
                            <td>
                                @php
                                    if($coupon->image !== null)
                                    {
                                        $explodeImage = explode(".", $coupon->image);
                                        $imageType = end($explodeImage);
                                        if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                        {
                                            echo '<a href="javascript:void(0);" class="pop"><img src="'.asset("/uploads/coupons/".$coupon->image).'" style="max-width: 100px; max-height: 100px;"/></a>';
                                        }
                                    }
                                @endphp
                                <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" data-dismiss="modal">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span
                                                        class="sr-only">Close</span>
                                                </button>
                                                <img src="" class="imagepreview" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $coupon->redeem_count }}</td>
                            <td>
                                <select name="status" id="status" data-coupon-id="{{ $coupon->id }}">
                                    @foreach($status as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $coupon->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="{{$module_name}}.coupon.edit" :id="$coupon->id"/>
                                    <x-delete route="{{$module_name}}.coupon.destroy" :id="$coupon->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $coupons->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($coupons->currentPage() * config('global.pagination_count') >= $coupons->total()) ? ($coupons->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $coupons->total() : ($coupons->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $coupons->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $coupons->total() }}
                        </span>
            </div>
        </div>
        <!-- /basic table -->
    </div>
    <!-- /content area -->

@endsection
@section('script')
    <script>
        $('.pop').on('click', function () {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });

        $('select#status').focus(function () {
            previous = $(this).val();
        }).on('change', function () {
            let $this = $(this);
            let status = $this.val();
            let coupon_id = $this.data('coupon-id');

            if (status > 0 && coupon_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this coupon!",
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
                            url: "{{ route($module_name.'.coupon.changeCouponStatus') }}",
                            data: {status: status, coupon_id: coupon_id},
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
                                        text: "This coupon's status was changed successfully!",
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
                            url: "{{ route($module_name.'.coupon.destroyMultipleCoupon') }}",
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
                            url: "{{ route($module_name.'.coupon.statusMultipleCoupon') }}",
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
