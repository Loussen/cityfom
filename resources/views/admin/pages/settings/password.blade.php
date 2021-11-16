@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Change Password</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Change Password</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-body">
                @include('admin.particles._sessionmessage')
                <form action="{{route($module_name.'.password.passwordStore')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('oldpassword') text-danger @enderror"
                                   for="oldpassword">{{__('admin.oldpassword')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="oldpassword" id="oldpassword"
                                       class="form-control @error('oldpassword') border-danger @enderror"
                                       placeholder="{{__('admin.oldpassword')}}" value="{{ old('oldpassword') }}">
                            </div>
                            @error('oldpassword')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('newpassword') text-danger @enderror"
                                   for="newpassword">{{__('admin.newpassword')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="newpassword" id="newpassword"
                                       class="form-control @error('newpassword') border-danger @enderror"
                                       placeholder="{{__('admin.newpassword')}}" value="{{ old('newpassword') }}">
                            </div>
                            @error('newpassword')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('newconfirmpassword') text-danger @enderror"
                                   for="newconfirmpassword">{{__('admin.newconfirmpassword')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="newconfirmpassword" id="newconfirmpassword"
                                       class="form-control @error('newconfirmpassword') border-danger @enderror"
                                       placeholder="{{__('admin.newconfirmpassword')}}" value="{{ old('newconfirmpassword') }}">
                            </div>
                            @error('newconfirmpassword')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="{{$module_name}}.email_templates.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
@stop
