@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add Category</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('admin.category.index') }}" class="breadcrumb-item">Categories</a>
                    <span class="breadcrumb-item active">Add Category</span>
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
                <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name_en') text-danger @enderror" for="name_en">{{__('admin.name_en')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name_en" id="name_en" class="form-control @error('name_en') border-danger @enderror" placeholder="{{__('admin.name_en')}}" value="{{ old('name_en') }}">
                            </div>
                            @error('name_en')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name_az') text-danger @enderror" for="name_az">{{__('admin.name_az')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name_az" id="name_az" class="form-control @error('name_az') border-danger @enderror" placeholder="{{__('admin.name_az')}}" value="{{ old('name_az') }}">
                            </div>
                            @error('name_az')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name_ru') text-danger @enderror" for="name_ru">{{__('admin.name_ru')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name_ru" id="name_ru" class="form-control @error('name_ru') border-danger @enderror" placeholder="{{__('admin.name_ru')}}" value="{{ old('name_ru') }}">
                            </div>
                            @error('name_ru')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name_es') text-danger @enderror" for="name_es">{{__('admin.name_es')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name_es" id="name_es" class="form-control @error('name_es') border-danger @enderror" placeholder="{{__('admin.name_es')}}" value="{{ old('name_es') }}">
                            </div>
                            @error('name_es')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('icon') text-danger @enderror" for="document">{{__('admin.icon')}}</label>
                            <input type="file" name="icon" class="form-input-styled" data-fouc />
                            <span class="form-text text-muted">Accepted formats: jpg, jpeg, png, ico. Max file size 2Mb</span>
                            @error('icon')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save />
                            <x-back route="admin.category.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
@stop
