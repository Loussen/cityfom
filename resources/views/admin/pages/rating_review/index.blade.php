@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Rating & Reviews</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Rating & Reviews</span>
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
                <h5 class="card-title">Search rating & review</h5>
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
                            <label for="review">{{__('admin.review')}}</label>
                            <input type="text" class="form-control" name="review" id="review"
                                   placeholder="{{ __('admin.review') }}" value="{{request('review')}}">
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
                                @foreach($ratingReviewstatus as $statusKey => $statusVal)
                                    <option
                                        {{ request('status') == $statusKey ? 'selected' : '' }}  value="{{ $statusKey }}">{{ $statusVal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="{{$module_name}}.rating_review.index"/>
                            <x-clear/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <a class="btn btn-info legitRipple col-md-2 mr-2 mb-2"
           href="{{ route($module_name.'.rating_review.index',['like_count' => $likeCount == 'ASC' ? 'DESC' : 'ASC']) }}">
            {!! $likeCount == 'ASC' ? "<i class='icon-arrow-up-left2'></i>" : "<i class='icon-arrow-down-left2'></i>" !!}
            Sorting by like count
        </a>
        <div class="card" style="zoom: 1;">
            <div class="card-header row">
                <div class="col-md-6 mr-1 mb-2 border p-1 rounded">
                    Status: <br />
                    <button class="btn btn-success status_all col-md-3" data-type="1"
                            data-url="{{ url('statusMultipleRatingReview') }}">
                        Accept
                    </button>

                    <button class="btn btn-warning status_all col-md-3" data-type="2"
                            data-url="{{ url('statusMultipleRatingReview') }}">
                        Pending
                    </button>

                    <button class="btn btn-danger status_all col-md-3" data-type="3"
                            data-url="{{ url('statusMultipleRatingReview') }}">
                        Reject
                    </button>
                </div>

                <div class="col-md-3 mb-2 float-right text-right">
                    <button class="btn btn-danger delete_all"
                            data-url="{{ url('destroyMultipleRatingReview') }}
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
                        <th style="width: 10%;">Username</th>
                        <th>Store</th>
                        <th style="width: 10%;">Rating</th>
                        <th style="width: 15%;">Review</th>
                        <th style="width: 15%;">User added images</th>
                        <th>Like count</th>
                        <th>Owner comment</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-center"><i class="icon-menu7"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ratingReviews as $ratingReview)
                        <tr id="tr_{{$ratingReview->rate_review_id}}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{$ratingReview->rate_review_id}}"></td>
                            <td>{{ $ratingReview->id }}</td>
                            <td>{!! $ratingReview->firstname." ".$ratingReview->lastname."<br /><b>".$ratingReview->email."</b>" !!}</td>
                            <td>{{ $ratingReview->store_name }}</td>
                            <td>
                                @for($i = 1; $i <= $ratingReview->rating; $i++)
                                    {!! '<i class="icon-star-full2"></i>' !!}
                                @endfor
                                @if($ratingReview->rating < 5)
                                    @for($j = 1; $j <= 5 - $ratingReview->rating; $j++)
                                        {!! '<i class="icon-star-empty3"></i>' !!}
                                    @endfor
                                @endif
                            </td>
                            <td>{{ $ratingReview->review ? mb_substr($ratingReview->review,0,100,'UTF-8')." ..." : " - " }}</td>
                            <td>
                                @php
                                    if($ratingReview->rate_review_images !== null)
                                    {
                                        $explodeImages = explode(",", $ratingReview->rate_review_images);

                                        foreach ($explodeImages as $images)
                                        {
                                            $explodeImage = explode(".", $images);
                                            $imageType = end($explodeImage);
                                            if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                            {
                                                echo '<a href="javascript:void(0);" class="pop" style="margin: 5px 5px; display: inline-block;"><img src="'.asset("/uploads/rating_reviews/".$images).'" style="width: 70px; height: 70px;" class="rounded"/></a> ';
                                            }
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
                            <td>{{ $ratingReview->like_count }}</td>
                            <td>{{ $ratingReview->comment !== null ? 'Yes' : 'No' }}</td>

                            <td>{{ $ratingReview->created_at }}</td>
                            <td>
                                <select name="status" id="status" data-rate-review-id="{{ $ratingReview->rate_review_id }}">
                                    @foreach($ratingReviewstatus as $statusKey => $statusVal)
                                        <option
                                            {{ $statusKey == $ratingReview->status ? 'selected': '' }} value="{{ $statusKey }}">{{ $statusVal }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-show route="{{$module_name}}.rating_review.show" :id="$ratingReview->rate_review_id"/>
                                    <x-delete route="{{$module_name}}.rating_review.destroy" :id="$ratingReview->rate_review_id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $ratingReviews->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($ratingReviews->currentPage() * config('global.pagination_count') >= $ratingReviews->total()) ? ($ratingReviews->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $ratingReviews->total() : ($ratingReviews->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $ratingReviews->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $ratingReviews->total() }}
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
            let rate_review_id = $this.data('rate-review-id');

            if (status > 0 && rate_review_id > 0) {
                swal.fire({
                    title: 'Alert',
                    text: "Do you want change status this rate review!",
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
                            url: "{{ route($module_name.'.rating_review.changeRatingReviewStatus') }}",
                            data: {status: status, rate_review_id: rate_review_id},
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
                                        text: "This rate review's status was changed successfully!",
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
                            url: "{{ route($module_name.'.rating_review.destroyMultipleRatingReview') }}",
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
                            url: "{{ route($module_name.'.rating_review.statusMultipleRatingReview') }}",
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
