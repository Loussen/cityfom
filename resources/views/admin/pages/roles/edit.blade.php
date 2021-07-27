@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit Role</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route('admin.roles.index') }}" class="breadcrumb-item">Roles</a>
                    <span class="breadcrumb-item active">Edit Role</span>
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
                <form action="{{route('admin.roles.update', $role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $role->id }}"/>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name') text-danger @enderror"
                                   for="name">{{__('admin.name')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') border-danger @enderror"
                                       placeholder="{{__('admin.name')}}"
                                       value="{{ old('name', $role->name) }}">
                            </div>
                            @error('name')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>{{__('admin.permission')}}</label>
                            <br />
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="permission" type="checkbox" id="master" class="custom-control-input">
                                <label class="custom-control-label" for="master">All permissions</label>
                            </div>
                            <br />
                            @foreach($permissions as $permission)
                                <br>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="permission[]" {{ ( (is_array(old('permission')) && in_array($permission->id, old('permission'))) || in_array($permission->id, $rolePermissions) ) ? 'checked ' : '' }} type="checkbox" class="custom-control-input sub_chk" id="custom_checkbox_inline_unchecked_{{$permission->id}}"  value="{{ $permission->id }}">
                                    <label class="custom-control-label" for="custom_checkbox_inline_unchecked_{{$permission->id}}">{{$permission->name}}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="admin.category.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        function allCheckSet($this) {
            if ($('.sub_chk:checked').length == $('.sub_chk').length) {
                $($this).prop('checked', true);
            } else {
                $($this).prop('checked', false);
            }
        }

        allCheckSet($('#master'));

        $(".sub_chk").on('click', function () {
            allCheckSet($('#master'));
        })

        $('#master').on('click', function (e) {
            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            } else {
                $(".sub_chk").prop('checked', false);
            }
        });
    </script>
@stop
