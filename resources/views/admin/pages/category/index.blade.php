@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Categories</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.category.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Categories</span>
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
                <h5 class="card-title">Search category</h5>
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
                            <label for="name">{{__('admin.name')}}</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="{{ __('admin.name') }}" value="{{request('name')}}">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="status">{{__('admin.status')}}</label>
                            <select name="status" class="select" id="status">
                                <option value="">{{ __('admin.all') }}</option>
                                <option
                                    {{ request('status') == 1 ? 'selected' : '' }}  value="1">{{ __('admin.enable') }}</option>
                                <option
                                    {{ request('status') == 2 ? 'selected' : '' }} value="0">{{ __('admin.disable') }}</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="filter_type">{{__('admin.filter_type')}}</label>
                            <select name="filter_type" class="select" id="filter_type">
                                <option value="">{{ __('admin.all') }}</option>
                                <option
                                    {{ request('filter_type') == 1 ? 'selected' : '' }}  value="1">{{ __('admin.yes') }}</option>
                                <option
                                    {{ request('filter_type') == 2 ? 'selected' : '' }} value="0">{{ __('admin.no') }}</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="admin.category.index"/>
                            <x-clear/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <a class="btn btn-info legitRipple col-md-2 mr-2 mb-2"
           href="{{ route('admin.category.index',['store_count' => $storeCount == 'ASC' ? 'DESC' : 'ASC']) }}">
            {!! $storeCount == 'ASC' ? "<i class='icon-arrow-up-left2'></i>" : "<i class='icon-arrow-down-left2'></i>" !!}
            Sorting by store count
        </a>
        <div class="card" style="zoom: 1;">
            <div class="card-header row">

                <h5 class="card-title mr-5">Categories</h5>

                <div class="col-md-3 mr-1 mb-2 border border-primary p-1">
                    Filter type: <br />
                    <button class="btn btn-success filter_all col-md-5" data-type="1"
                            data-url="{{ url('filterMultipleCategory') }}">
                        Yes Selected
                    </button>

                    <button class="btn btn-warning filter_all col-md-5" data-type="2"
                            data-url="{{ url('filterMultipleCategory') }}">
                        No Selected
                    </button>
                </div>

                <div class="col-md-4 mr-1 mb-2 border border-primary p-1">
                    Status: <br />
                    <button class="btn btn-dark status_all col-md-5" data-type="1"
                            data-url="{{ url('statusMultipleCategory') }}">
                        Enable Selected
                    </button>

                    <button class="btn btn-dark status_all col-md-5" data-type="2"
                            data-url="{{ url('statusMultipleCategory') }}">
                        Disable Selected
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleCategory') }}
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
                        <th>Icon</th>
                        <th>Store Count</th>
                        <th>Status</th>
                        <th>Filter</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr id="tr_{{$category->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$category->id}}"></td>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name_en }}</td>
                            <td>{{ $category->name_az }}</td>
                            <td>{{ $category->name_es }}</td>
                            <td>{{ $category->name_ru }}</td>
                            <td>
                                @php
                                    if($category->icon !== null)
                                    {
                                        $explodeIcon = explode(".", $category->icon);
                                        $iconType = end($explodeIcon);
                                        if(in_array(strtolower($iconType), ['jpg', 'jpeg', 'png', 'ico']));

                                        echo '<a href="javascript:void(0);" class="pop"><img src="'.asset("/uploads/categories/".$category->icon).'" style="max-width: 100px; max-height: 100px;"/></a>';
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
                            <td>{{ $category->store_count }}</td>
                            <td>
                                <select name="status" id="status" data-category-id="{{ $category->id }}">
                                    @foreach($status as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $category->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="filter_type" id="filter_type" data-category-id="{{ $category->id }}">
                                    @foreach($filterType as $filterTypeKey => $filterTypeVal)
                                        <option
                                            {{ $filterTypeKey == $category->filter ? 'selected': '' }} value="{{ $filterTypeKey }}">{{ $filterTypeVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="admin.category.edit" :id="$category->id"/>
                                    <x-delete route="admin.category.destroy" :id="$category->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $categories->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($categories->currentPage() * config('global.pagination_count') >= $categories->total()) ? ($categories->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $categories->total() : ($categories->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $categories->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $categories->total() }}
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
            let category_id = $this.data('category-id');

            if (status > 0 && category_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this category!",
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
                            url: "{{ route('admin.category.changeCategoryStatus') }}",
                            data: {status: status, category_id: category_id},
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
                                        text: "This category's status was changed successfully!",
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

        $('select#filter_type').focus(function () {
            previous = $(this).val();
        }).on('change', function () {
            let $this = $(this);
            let filter_type = $this.val();
            let category_id = $this.data('category-id');

            if (filter_type > 0 && category_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change filter type this category!",
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
                            url: "{{ route('admin.category.changeCategoryFilterType') }}",
                            data: {filter_type: filter_type, category_id: category_id},
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
                                        text: "This category's filter type was changed successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });
                                    $($this).val(data.response.filter_type);
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
                            url: "{{ route('admin.category.destroyMultipleCategory') }}",
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

        $('.filter_all').on('click', function (e) {

            let allVals = [];
            let filter_type = $(this).attr('data-type');
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
                    text: "Are you sure you want change filter type these rows?",
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
                            url: "{{ route('admin.category.filterMultipleCategory') }}",
                            data: {ids: join_selected_values, filter_type: filter_type},
                            method: 'PUT',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: false,
                            success: function (data) {
                                if (data.response.status == 'OK') {
                                    $(".sub_chk:checked").each(function () {
                                        $(this).parents("tr").find('select#filter_type').val(data.response.filter_type);
                                    });
                                    swal.fire({
                                        title: 'Success',
                                        text: "These rows was changed filter type successfully!",
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
                            url: "{{ route('admin.category.statusMultipleCategory') }}",
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
