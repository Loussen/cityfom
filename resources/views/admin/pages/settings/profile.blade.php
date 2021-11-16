@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit profile</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Edit Profile</span>
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
                <form action="{{route($module_name.'.profile.profileStore', auth()->guard(get_admin_guard_name())->user()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('firstname') text-danger @enderror"
                                   for="firstname">{{__('admin.firstname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="firstname" id="firstname"
                                       class="form-control @error('firstname') border-danger @enderror"
                                       placeholder="{{__('admin.firstname')}}"
                                       value="{{ old('firstname', auth()->guard(get_admin_guard_name())->user()->firstname) }}">
                            </div>
                            @error('firstname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('lastname') text-danger @enderror"
                                   for="lastname">{{__('admin.lastname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="lastname" id="lastname"
                                       class="form-control @error('lastname') border-danger @enderror"
                                       placeholder="{{__('admin.lastname')}}"
                                       value="{{ old('lastname', auth()->guard(get_admin_guard_name())->user()->lastname) }}">
                            </div>
                            @error('lastname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('email') text-danger @enderror"
                                   for="email">{{__('admin.email')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input disabled type="text" name="email" id="email"
                                       class="form-control @error('email') border-danger @enderror"
                                       placeholder="{{__('admin.email')}}"
                                       value="{{ old('email', auth()->guard(get_admin_guard_name())->user()->email) }}">
                            </div>
                            @error('email')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="image">{{__('admin.image')}}</label>
                            <input type="file" name="image" class="form-input-styled" data-fouc />
                            <span class="form-text text-muted">Accepted formats: jpg, jpeg, png. Max file size 2Mb</span>
                            <?php
                            if(auth()->guard(get_admin_guard_name())->user()->photo !== null)
                            {
                                echo "<br />";
                                $explodeImage = explode(".", auth()->guard(get_admin_guard_name())->user()->photo);
                                $imageType = end($explodeImage);
                                if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                {
                                    ?>
                                    <a href="javascript:void(0);" class="pop"><img src="{{ asset('/uploads/profile_admin/'.auth()->guard(get_admin_guard_name())->user()->photo) }}" style="max-width: 300px; max-height: 300px;"/></a>
                                <?php
                                }
                            ?>
                                <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" data-dismiss="modal">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                </button>
                                                <img src="" class="imagepreview" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            @error('image')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });
    </script>
@stop
