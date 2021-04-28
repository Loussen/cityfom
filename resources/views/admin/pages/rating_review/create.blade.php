@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add Coupon</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route('admin.coupon.index') }}" class="breadcrumb-item">Coupons</a>
                    <span class="breadcrumb-item active">Add Coupon</span>
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
                <form action="{{route('admin.coupon.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('title') text-danger @enderror"
                                   for="title">{{__('admin.title')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="title" id="title"
                                       class="form-control @error('title') border-danger @enderror"
                                       placeholder="{{__('admin.title')}}" value="{{ old('title') }}">
                            </div>
                            @error('title')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('store_id') text-danger @enderror"
                                   for="store_id">{{__('admin.stores')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="store_id" class="select-search" id="store_id">
                                    <option value="0">{{__('admin.please_select')}} ...</option>
                                    @foreach($stores as $store)
                                        <option
                                            {{ old('store_id') == $store->id ? 'selected': '' }} value="{{$store->id}}">{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('store_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('valid_from_to') text-danger @enderror"
                                   for="name_ru">{{__('admin.valid_from_to')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <div class="input-group">
                                <span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                                    @php
                                        if(old('valid_from_to'))
                                        {
                                            echo '<input type="text" name="valid_from_to" class="form-control daterange-basic"
                                           value="'.old('valid_from_to').'">';
                                        }
                                        else
                                        {
                                            echo '<input type="text" name="valid_from_to" class="form-control daterange-basic"
                                           value="">';
                                        }
                                    @endphp

                                </div>
                            </div>
                            @error('name_ru')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('discount') text-danger @enderror"
                                   for="discount">{{__('admin.discount')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="number" min="1" name="discount" id="discount"
                                       class="form-control @error('discount') border-danger @enderror"
                                       placeholder="{{__('admin.discount')}}" value="{{ old('discount') }}">
                                <div class="form-control-feedback form-control-feedback-lg">
                                    <i class="icon-percent"></i>
                                </div>
                            </div>
                            @error('discount')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('description') text-danger @enderror"
                                   for="discount">{{__('admin.description')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea rows="3" cols="3" class="form-control @error('description') border-danger @enderror" name="description" placeholder="{{__('admin.description')}}">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="document">{{__('admin.image')}}</label>
                            <input type="file" name="image" class="form-input-styled" data-fouc/>
                            <span
                                class="form-text text-muted">Accepted formats: jpg, jpeg, png. Max file size 2Mb</span>
                            @error('image')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="admin.coupon.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
@stop
