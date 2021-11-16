@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit CMS user</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route($module_name.'.cms_users.index') }}" class="breadcrumb-item">CMS users</a>
                    <span class="breadcrumb-item active">Edit CMS user</span>
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
                <form action="{{route($module_name.'.cms_users.update', $cmsUsers->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <input type="hidden" name="id" value="{{$cmsUsers->id}}" />
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('firstname') text-danger @enderror" for="firstname">{{__('admin.firstname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') border-danger @enderror" placeholder="{{__('admin.firstname')}}" value="{{ old('firstname',$cmsUsers->firstname) }}">
                            </div>
                            @error('firstname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('lastname') text-danger @enderror" for="lastname">{{__('admin.lastname')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="lastname" id="lastname" class="form-control @error('lastname') border-danger @enderror" placeholder="{{__('admin.lastname')}}" value="{{ old('lastname',$cmsUsers->lastname) }}">
                            </div>
                            @error('lastname')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('email') text-danger @enderror" for="email">{{__('admin.email')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="{{__('admin.email')}}" value="{{ old('email',$cmsUsers->email) }}">
                            </div>
                            @error('email')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('password') text-danger @enderror" for="password">{{__('admin.password')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="password" id="password" class="form-control @error('password') border-danger @enderror" placeholder="{{__('admin.password')}}" autocomplete="off">
                                <input type="checkbox" id="show_password" onclick="myFunction('password')"> <label for="show_password">Parolu göstər</label>
                            </div>
                            @error('password')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('confirm_password') text-danger @enderror" for="confirm_password">{{__('admin.confirm_password')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') border-danger @enderror" placeholder="{{__('admin.confirm_password')}}" autocomplete="off">
                                <input type="checkbox" id="show_password" onclick="myFunction('confirm_password')"> <label for="show_password">Parolu göstər</label>
                            </div>
                            @error('confirm_password')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="document">{{__('admin.image')}}</label>
                            <input type="file" name="image" class="form-input-styled" data-fouc/>
                            <span
                                class="form-text text-muted">Accepted formats: jpg, jpeg, png. Max file size 2Mb</span>
                            <?php
                            if($cmsUsers->photo !== null)
                            {
                            echo "<br />";
                            $explodeImage = explode(".", $cmsUsers->photo);
                            $imageType = end($explodeImage);
                            if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                            {
                            ?>
                            <a href="javascript:void(0);" class="pop"><img
                                    src="{{ asset('/uploads/cms_users/'.$cmsUsers->photo) }}"
                                    style="max-width: 300px; max-height: 300px;"/></a>
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
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('role_id') text-danger @enderror" for="role_id">{{__('admin.roles')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="role_id" class="select-search" id="role_id">
                                    <option value="">{{__('admin.please_select')}}</option>
                                    @foreach($roles as $role)
                                        <option {{$role->id == old('role_id',$userRole) ? 'selected': ''}} value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('store_ids') text-danger @enderror" for="store_ids">{{__('admin.store_ids')}} (if user is store user)</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="store_ids[]" class="select-search" id="store_ids" multiple>
                                    <option value="">{{__('admin.please_select')}}</option>
                                    @foreach($stores as $store)
                                        <option {{ collect(old('store_ids', explode(',',$cmsUsers->store_ids)))->contains($store->id) ? 'selected': '' }} value="{{$store->id}}">{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('store_ids')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('never_expire') text-danger @enderror" for="never_expire">{{__('admin.never_expire')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input name="never_expire" type="checkbox" class="@error('never_expire') border-danger @enderror" id="never_expire" value="1" {{ old('never_expire',!$cmsUsers->expiration_date) ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 expire_date" style="{{!old('never_expire',$cmsUsers->expiration_date) ? 'display:none;' : ''}}">
                            <label class="font-weight-semibold @error('expire_date') text-danger @enderror" for="expire_date">{{__('admin.expire_date')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="expire_date" id="expire_date" class="form-control daterange-single"
                                       value="{{old('expire_date',date("m/d/Y",strtotime($cmsUsers->expiration_date)))}}">
                            </div>
                            @error('expire_date')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save />
                            <x-back route="{{$module_name}}.cms_users.index"></x-back>
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

        function checked_expire_date_show($this)
        {
            setTimeout(function () {
                if ($this === true) {
                    $("div.expire_date input#expire_date").val('');
                    $("div.expire_date").hide();
                } else if ($this === false) {
                    $("div.expire_date").show();
                }
            }, 500);
        }

        $( 'input#never_expire' ).click(function() {
            checked_expire_date_show($(this).prop("checked"));
        });

        checked_expire_date_show($("input#never_expire").prop("checked"));
    </script>
@stop
