@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit Loyalty message</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route($module_name.'.loyalty_message.index') }}" class="breadcrumb-item">Loyalty messages</a>
                    <span class="breadcrumb-item active">Edit Loyalty message</span>
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
                <form action="{{route($module_name.'.loyalty_message.update', $loyaltyMessage->id)}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('store_id') text-danger @enderror"
                                   for="store_id">{{__('admin.stores')}}</label>
                            <select name="store_id" class="select-search" id="store_id">
                                <option value="0">{{__('admin.please_select')}} ...</option>
                                @foreach($stores as $store)
                                    <option
                                        {{ old('store_id',$loyaltyMessage->store_id) == $store->id ? 'selected': '' }} value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                            </select>
                            @error('store_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('type') text-danger @enderror"
                                   for="type">{{__('admin.type')}}</label>
                            <select name="type" class="select-search" id="type">
                                <option value="0">{{__('admin.please_select')}} ...</option>
                                @foreach($loyaltyMessageType as $typeKey => $typeVal)
                                    <option
                                        {{ old('type',$loyaltyMessage->type) == $typeKey ? 'selected': '' }} value="{{$typeKey}}">{{$typeVal}}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('valid_from_to') text-danger @enderror"
                                   for="valid_from_to">{{__('admin.valid_from_to')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <div class="input-group">
                                <span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                                    <input type="text" name="valid_from_to" id="valid_from_to" class="form-control daterange-basic"
                                           value="{{ old('valid_from_to',date("m/d/Y",strtotime($loyaltyMessage->valid_from))." - ".date("m/d/Y",strtotime($loyaltyMessage->valid_to))) }}">
                                </div>
                            </div>
                            @error('valid_from_to')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('points') text-danger @enderror"
                                   for="points">{{__('admin.points')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="points" id="points"
                                       class="form-control @error('points') border-danger @enderror"
                                       placeholder="{{__('admin.points')}}"
                                       value="{{ old('points', $loyaltyMessage->points) }}">
                            </div>
                            @error('points')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('description') text-danger @enderror"
                                   for="description">{{__('admin.description')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea rows="3" cols="3" class="form-control @error('description') border-danger @enderror" name="description" placeholder="{{__('admin.description')}}">{{ old('description', $loyaltyMessage->description) }}</textarea>
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
                            <?php
                            if($loyaltyMessage->image !== null)
                            {
                            echo "<br />";
                            $explodeImage = explode(".", $loyaltyMessage->image);
                            $imageType = end($explodeImage);
                            if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                            {
                            ?>
                            <a href="javascript:void(0);" class="pop"><img
                                    src="{{ asset('/uploads/loyalty_messages/'.$loyaltyMessage->image) }}"
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
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="{{$module_name}}.loyalty_message.index"></x-back>
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
    </script>
@stop
