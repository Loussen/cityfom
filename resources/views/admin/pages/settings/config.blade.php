@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Configs</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <span class="breadcrumb-item active">Configs</span>
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
                <form action="{{route('admin.configs.configStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <?php
                            foreach ($configs as $config) {
                                $name = $config->slug;
                                ?>
                                <div class="form-group col-sm-12">
                                    <label class="font-weight-semibold @error($name) text-danger @enderror"
                                           for="{{$name}}">{{$config->title}}</label>
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input required type="{{$config->type}}" name="{{$name}}" id="{{$name}}"
                                               class="form-control @error($name) border-danger @enderror"
                                               placeholder="{{ $config->title }}" value="{{ old($name,$config->value) }}">
                                    </div>
                                    @error('title')
                                    <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <?php
                            }
                        ?>

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
@stop
