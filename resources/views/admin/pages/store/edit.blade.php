@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit Store</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('admin.store.index') }}" class="breadcrumb-item">Stores</a>
                    <span class="breadcrumb-item active">Edit Store</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @include('admin.particles._sessionmessage',['error_type' => 'warning'])
                <form action="{{route('admin.store.update', $store->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name') text-danger @enderror" for="name">{{__('admin.name')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name" id="name" class="form-control @error('name') border-danger @enderror" placeholder="{{__('admin.name')}}" value="{{ old('name', $store->name) }}">
                            </div>
                            @error('name')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('description') text-danger @enderror"
                                   for="description">{{__('admin.description')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea rows="3" cols="3" class="form-control @error('description') border-danger @enderror" name="description" placeholder="{{__('admin.description')}}">{{ old('description', $store->description) }}</textarea>
                            </div>
                            @error('description')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('tags') text-danger @enderror" for="tags">{{__('admin.tags')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                @if (is_array(old('tags')) || $store->tags)
                                    @php
                                        $tags = explode(",",$store->tags);
                                    @endphp
                                    <select id="tags" name="tags[]" class="form-control select-multiple-tags" multiple="multiple" data-fouc>
                                        @foreach (old('tags', $tags) as $tag)
                                            <option value="{{ $tag }}" selected="selected">{{ $tag }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="tags[]" id="tags" class="form-control select-multiple-tags" multiple="multiple" data-fouc></select>
                                @endif
                            </div>
                            @error('tags')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('category_id') text-danger @enderror" for="category_id">{{__('admin.category')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="category_id[]" id="category_id" class="form-control select-multiple-limited" multiple="multiple" data-fouc>
                                    @foreach($categories as $category)
                                        <option {{ collect(old('category_id', $categoryArr))->contains($category->id) ? 'selected': '' }} value="{{$category->id}}">{{$category->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('address') text-danger @enderror" for="address">{{__('admin.address')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="address" id="address" class="form-control @error('address') border-danger @enderror" placeholder="{{__('admin.address')}}" value="{{ old('address', $store->address) }}" onfocusout="get_long_let()">
                                <input type="hidden" id="latitude" value="{{ old('latitude', $store->latitude) }}" name="latitude">
                                <input type="hidden" id="longitude" value="{{ old('longitude', $store->longitude) }}" name="longitude">
                            </div>
                            @error('address')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('country') text-danger @enderror" for="country">{{__('admin.country')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="country" id="country" class="form-control @error('country') border-danger @enderror" placeholder="{{__('admin.country')}}" value="{{ old('country', $store->country) }}">
                            </div>
                            @error('country')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('email') text-danger @enderror" for="email">{{__('admin.email')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="email" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="{{__('admin.email')}}" value="{{ old('email', $store->email) }}">
                            </div>
                            @error('email')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('phone') text-danger @enderror" for="phone">{{__('admin.phone')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') border-danger @enderror" placeholder="{{__('admin.phone')}}" value="{{ old('phone', $store->phone) }}">
                            </div>
                            @error('phone')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('facebook_url') text-danger @enderror" for="facebook_url">{{__('admin.facebook_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="facebook_url" id="facebook_url" class="form-control @error('facebook_url') border-danger @enderror" placeholder="{{__('admin.facebook_url')}}" value="{{ old('facebook_url', $store->facebook) }}">
                            </div>
                            @error('facebook_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('twitter_url') text-danger @enderror" for="twitter_url">{{__('admin.twitter_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="twitter_url" id="twitter_url" class="form-control @error('twitter_url') border-danger @enderror" placeholder="{{__('admin.twitter_url')}}" value="{{ old('twitter_url', $store->twitter) }}">
                            </div>
                            @error('twitter_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('instagram_url') text-danger @enderror" for="instagram_url">{{__('admin.instagram_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="instagram_url" id="instagram_url" class="form-control @error('instagram_url') border-danger @enderror" placeholder="{{__('admin.instagram_url')}}" value="{{ old('instagram_url', $store->instagram) }}">
                            </div>
                            @error('instagram_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('website') text-danger @enderror" for="website">{{__('admin.website')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="website" id="website" class="form-control @error('website') border-danger @enderror" placeholder="{{__('admin.website')}}" value="{{ old('website', $store->website) }}">
                            </div>
                            @error('website')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('partner_type') text-danger @enderror"
                                   for="partner_type">{{__('admin.partner_type')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="partner_type" class="form-control @error('partner_type') border-danger @enderror" id="partner_type">
                                    <option value="0">{{__('admin.please_select')}} ...</option>
                                    @foreach($partnerTypes as $typeKey => $typeVal)
                                        <option
                                            {{ old('partner_type', $store->type) == $typeKey ? 'selected': '' }} value="{{$typeKey}}">{{$typeVal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('partner_type')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="document">{{__('admin.image')}}</label>
                            <input type="file" name="image[]" id="image" multiple accept="image/*" /> <br />
                            @php
                                if($storeImages)
                                {
                                    $i = 0;
                                    foreach ($storeImages as $images)
                                    {
                                        $explodeImage = explode(".", $images->image);
                                        $imageType = end($explodeImage);
                                        if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                        {
                                            echo '<span style="border: 1px solid;
    display: inline-block;
    padding: 5px;" data-id='.$images->id.'><a href="javascript:void(0);" class="pop" style="margin: 5px 5px; display: inline-block;"><img src="'.asset("/uploads/stores/".$images->image).'" style="width: 70px; height: 70px;" class="rounded"/></a>
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
                            <x-save />
                            <x-back route="admin.store.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyB3F_B_YH0XuWy_EB-zK-w4hyNJ1vjEJqQ"></script>

    <script>
        function initialize() {
            let input = document.getElementById('address');
            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);


        function get_long_let() {
            let geocoder = new google.maps.Geocoder();
            let address = document.getElementById('address').value;
            geocoder.geocode({'address': address}, function (results, status) {
                if (results[0]) {
                    let country = '';

                    for (let i = 0; i < results[0].address_components.length; i++) {
                        country = results[0].address_components[i];
                        for (let b = 0; b < results[0].address_components[i].types.length; b++) {
                            if (results[0].address_components[i].types[b] == "country") {
                                country = results[0].address_components[i];
                                document.getElementById('country').value = country.long_name;
                                break;
                            }
                        }
                    }

                    console.log('ddada');
                }

                if (status == google.maps.GeocoderStatus.OK) {
                    let latitude = results[0].geometry.location.lat();
                    let longitude = results[0].geometry.location.lng();

                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;
                }
            });
        }

        $(document).ready(function () {
            $(window).keydown(function (event) {

                if (event.keyCode == 13) {
                    event.preventDefault();
                    setTimeout(function () {
                        get_long_let();
                    }, 500);
                    return false;
                }
            });
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
                        url: "{{ route('admin.store.destroyStoreImage') }}",
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
