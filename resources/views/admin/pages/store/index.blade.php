@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Stores</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.store.create')}}" class="btn btn-outline-success float-right"><i
                            class="icon-plus2"></i> Add New</a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Stores</span>
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
                <h5 class="card-title">Search store</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body search-item">
                <form action="" method="get">
                    <div class="form-row">
                        <div class="form-group col-sm-1">
                            <label for="id">{{__('admin.id')}}</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="{{ __('admin.id') }}"
                                   value="{{request('id')}}">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="name">{{__('admin.name')}}</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="{{ __('admin.name') }}" value="{{request('name')}}">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="type">{{__('admin.type')}}</label>
                            <select name="type" class="select" id="type">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($storeTypes as $typeKey => $typeVal)
                                    <option
                                        {{ request('type') == $typeKey ? 'selected' : '' }}  value="{{ $typeKey }}">{{ $typeVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="category_id">{{__('admin.category')}}</label>
                            <select name="category_id" class="select-search" id="category_id">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($categories as $category)
                                    <option
                                        {{ request('category_id') == $category->id ? 'selected' : '' }}  value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="partner_type">{{__('admin.partner_type')}}</label>
                            <select name="partner_type" class="select" id="partner_type">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($partnerTypes as $partnerTypeKey => $partnerTypeVal)
                                    <option
                                        {{ request('partner_type') == $partnerTypeKey ? 'selected' : '' }}  value="{{ $partnerTypeKey }}">{{ $partnerTypeVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
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
                            <x-showall route="admin.store.index"/>
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
                <div class="col-md-3 mr-1 mb-2 border p-1 rounded">
                    Partner type: <br />
                    <button class="btn btn-success type_all col-md-5" data-type="1"
                            data-url="{{ url('typeMultipleStore') }}">
                        Yes Selected
                    </button>

                    <button class="btn btn-warning type_all col-md-5" data-type="2"
                            data-url="{{ url('typeMultipleStore') }}">
                        No Selected
                    </button>
                </div>

                <div class="col-md-4 mr-1 mb-2 border p-1 rounded">
                    Status: <br />
                    <button class="btn btn-success status_all col-md-5" data-type="1"
                            data-url="{{ url('statusMultipleStore') }}">
                        Enable Selected
                    </button>

                    <button class="btn btn-warning status_all col-md-5" data-type="2"
                            data-url="{{ url('statusMultipleStore') }}">
                        Disable Selected
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleStore') }}
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
                        <th>CMS | Admin</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Number of favourites</th>
                        <th>Categories</th>
                        <th>Tags</th>
                        <th>Created</th>
                        <th>Type</th>
                        <th>Verification</th>
                        <th>Status</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stores as $store)
                        <tr id="tr_{{$store->id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$store->id}}"></td>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{!! $store->cms_store_id == 0 ? '<span class="badge badge-primary">Admin</span>' : '<span class="badge badge-success">CMS</span>' !!}</td>
                            <td>{{ $store->email }}</td>
                            <td>
                                @php
                                    if($store->store_images !== null)
                                    {
                                        $images = explode("&&&",$store->store_images);
                                        $explodeImage = explode(".", $images[0]);
                                        $imageType = end($explodeImage);
                                        if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png', 'ico']))
                                        {
                                            echo '<a href="javascript:void(0);" class="pop"><img src="'.asset("/uploads/stores/".$images[0]).'" style="max-width: 100px; max-height: 100px;"/></a>';
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
                            <td>{{ $store->fav_count ?? 0 }}</td>
                            <td>
                                @php
                                    if($store->store_category !== null)
                                    {
                                        $categories = explode("&&&",$store->store_category);

                                        foreach ($categories as $category) {
                                            echo '<span class="badge badge-info">'.$category.'</span> ';
                                        }
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    if($store->tags !== null)
                                    {
                                        $tags = explode(",",$store->tags);

                                        foreach ($tags as $tag) {
                                            echo '<span class="badge badge-info">'.$tag.'</span> ';
                                        }
                                    }
                                @endphp
                            </td>
                            <td>{{ $store->created_at }}</td>
                            <td>
                                <select name="partner_type" id="partner_type" data-store-id="{{ $store->id }}">
                                    @foreach($partnerTypes as $typeKey => $typeVal)
                                        <option
                                            {{ $typeKey == $store->type ? 'selected': '' }} value="{{ $typeKey }}">{{ $typeVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="verification" id="verification" data-store-id="{{ $store->id }}">
                                    @foreach($storeVerifications as $verificationKey => $verificationVal)
                                        <option
                                            {{ $verificationKey == $store->verified ? 'selected': '' }} value="{{ $verificationKey }}">{{ $verificationVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="status" id="status" data-store-id="{{ $store->id }}">
                                    @foreach($status as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $store->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-edit route="admin.store.edit" :id="$store->id"/>
                                    <x-delete route="admin.store.destroy" :id="$store->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $stores->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($stores->currentPage() * config('global.pagination_count') >= $stores->total()) ? ($stores->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $stores->total() : ($stores->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $stores->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $stores->total() }}
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
            let store_id = $this.data('store-id');

            if (status > 0 && store_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this store!",
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
                            url: "{{ route('admin.store.changeStoreStatus') }}",
                            data: {status: status, store_id: store_id},
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
                                        text: "This store's status was changed successfully!",
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

        $('select#verification').focus(function () {
            previous = $(this).val();
        }).on('change', function () {
            let $this = $(this);
            let verification = $this.val();
            let store_id = $this.data('store-id');

            if (verification > 0 && store_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change verification this store!",
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
                            url: "{{ route('admin.store.changeStoreVerification') }}",
                            data: {verification: verification, store_id: store_id},
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
                                        text: "This store's verification was changed successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });
                                    $($this).val(data.response.verification_type);
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

        $('select#partner_type').focus(function () {
            previous = $(this).val();
        }).on('change', function () {
            let $this = $(this);
            let partner_type = $this.val();
            let store_id = $this.data('store-id');

            if (partner_type > 0 && store_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change partner type this store!",
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
                            url: "{{ route('admin.store.changeStorePartnerType') }}",
                            data: {partner_type: partner_type, store_id: store_id},
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
                                        text: "This store's partner type was changed successfully!",
                                        type: 'success',
                                        confirmButtonText: 'OK',
                                        confirmButtonClass: 'btn btn-success',
                                        buttonsStyling: false
                                    });
                                    $($this).val(data.response.partner_type);
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
                            url: "{{ route('admin.store.destroyMultipleStore') }}",
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

        $('.type_all').on('click', function (e) {

            let allVals = [];
            let partner_type = $(this).attr('data-type');
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
                    text: "Are you sure you want change partner type these rows?",
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
                            url: "{{ route('admin.store.typeMultipleStore') }}",
                            data: {ids: join_selected_values, partner_type: partner_type},
                            method: 'PUT',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            async: false,
                            success: function (data) {
                                if (data.response.status == 'OK') {
                                    $(".sub_chk:checked").each(function () {
                                        $(this).parents("tr").find('select#partner_type').val(data.response.partner_type);
                                    });
                                    swal.fire({
                                        title: 'Success',
                                        text: "These rows was changed partner type successfully!",
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
                            url: "{{ route('admin.store.statusMultipleStore') }}",
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
