@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add CMS user</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('admin.cms_users.index') }}" class="breadcrumb-item">CMS users</a>
                    <span class="breadcrumb-item active">Add CMS user</span>
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
                <form action="{{route('admin.cms_users.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('firstname') text-danger @enderror" for="firstname">{{__('admin.firstname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') border-danger @enderror" placeholder="{{__('admin.firstname')}}" value="{{ old('firstname') }}">
                            </div>
                            @error('firstname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('lastname') text-danger @enderror" for="lastname">{{__('admin.lastname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="lastname" id="lastname" class="form-control @error('name_az') border-danger @enderror" placeholder="{{__('admin.lastname')}}" value="{{ old('lastname') }}">
                            </div>
                            @error('lastname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('password') text-danger @enderror" for="password">{{__('admin.password')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="password" id="password" class="form-control @error('password') border-danger @enderror" placeholder="{{__('admin.password')}}" value="{{ old('password') }}" autocomplete="off">
                                <input type="checkbox" id="show_password" onclick="myFunction('password')"> <label for="show_password">Parolu göstər</label>
                            </div>
                            @error('name_ru')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('role') text-danger @enderror" for="role">{{__('admin.role')}}</label>
                            <select name="roles[]" class="select-search" id="role">
                                <option value="">{{__('admin.please_select')}}</option>
                                @foreach($roles as $role)
                                    <option {{is_array(old('roles')) && in_array($role->id,old('roles')) ? 'selected': ''}} value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-save />
                            <x-back route="admin.cms_users.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        function myFunction(id) {
            let x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@stop
