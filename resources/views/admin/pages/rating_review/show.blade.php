@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Show Rating review</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route($module_name.'.rating_review.index') }}" class="breadcrumb-item">Rating review</a>
                    <span class="breadcrumb-item active">Show Rating review</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-body">
                @include('admin.particles._sessionmessage',['error_type' => 'warning'])
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('user') text-danger @enderror"
                                   for="user">{{__('admin.user')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="user" id="user" disabled
                                       class="form-control @error('user') border-danger @enderror"
                                       value="{{ old('user', $rateReview->firstname." ".$rateReview->lastname) }}">
                            </div>
                            @error('user')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('store_id') text-danger @enderror"
                                   for="store_id">{{__('admin.store')}}</label>
                            <select name="store_id" class="select-search" id="store_id" disabled>
                                <option>{{$rateReview->store_name}}</option>
                            </select>
                            @error('store_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('review') text-danger @enderror"
                                   for="review">{{__('admin.review')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea name="review" id="review" disabled
                                          class="form-control @error('title') border-danger @enderror"
                                          >{{ old('review', $rateReview->review) }}</textarea>
                            </div>
                            @error('review')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('comment') text-danger @enderror"
                                   for="comment">{{__('admin.comment')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea name="comment" id="comment" disabled
                                          class="form-control @error('comment') border-danger @enderror">{{ old('comment', $rateReview->comment) }}</textarea>
                            </div>
                            @error('comment')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('rating') text-danger @enderror"
                                   for="rating">{{__('admin.rating')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                @for($i = 1; $i <= $rateReview->rating; $i++)
                                    {!! '<i class="icon-star-full2"></i>' !!}
                                @endfor
                                @if($rateReview->rating < 5)
                                    @for($j = 1; $j <= 5 - $rateReview->rating; $j++)
                                        {!! '<i class="icon-star-empty3"></i>' !!}
                                    @endfor
                                @endif
                            </div>
                            @error('rating')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('like_count') text-danger @enderror"
                                   for="like_count">{{__('admin.like_count')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="like_count" id="like_count" disabled
                                       class="form-control @error('like_count') border-danger @enderror"
                                       value="{{ old('like_count', $rateReview->like_count) }}">
                            </div>
                            @error('like_count')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="document">{{__('admin.image')}}</label>
                            @php
                                if($rateReview->rate_review_images !== null)
                                {
                                    $explodeImages = explode(",", $rateReview->rate_review_images);
                                    $explodeImageId = explode(",", $rateReview->rate_review_image_id);

                                    $i = 0;
                                    foreach ($explodeImages as $images)
                                    {
                                        $explodeImage = explode(".", $images);
                                        $imageType = end($explodeImage);
                                        if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                        {
                                            echo '<span style="border: 1px solid;
    display: inline-block;
    padding: 5px;" data-id='.$explodeImageId[$i].'><a href="javascript:void(0);" class="pop" style="margin: 5px 5px; display: inline-block;"><img src="'.asset("/uploads/rating_reviews/".$images).'" style="width: 70px; height: 70px;" class="rounded"/></a>
                                                <i style="color: red; cursor:pointer;" class="icon-diff-removed remove_image"></i></span> ';
                                        }

                                        $i++;
                                    }
                                }
                                else
                                {
                                    echo "<br /> - ";
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
                            @error('image')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-back route="{{$module_name}}.coupon.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $('.pop').on('click', function () {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });

        $('.remove_image').on('click', function (e) {

            let current = $(this);
            let image_id = current.parent('span').attr('data-id');

            swal.fire({
                title: 'Alert',
                text: "Are you sure you want to delete image?",
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
                        url: "{{ route($module_name.'.rating_review.destroyImage') }}",
                        data: {image_id: image_id},
                        method: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        async: false,
                        success: function (data) {
                            if (data.response.status == 'OK') {

                                current.parent("span").remove();

                                swal.fire({
                                    title: 'Success',
                                    text: "This image was deleted successfully!",
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
        });
    </script>
@stop
