@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add Loyalty points</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route('admin.loyalty_point.index') }}" class="breadcrumb-item">Loyalty points</a>
                    <span class="breadcrumb-item active">Add Loyalty points</span>
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
                <form action="{{route('admin.loyalty_point.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('user_id') text-danger @enderror"
                                   for="user_id">{{__('admin.user_id')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="user_id" id="user_id"
                                       class="form-control @error('user_id') border-danger @enderror"
                                       placeholder="{{__('admin.user_id')}}" value="{{ old('user_id') }}">
                            </div>
                            @error('user_id')
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
                            <label class="font-weight-semibold @error('points') text-danger @enderror"
                                   for="points">{{__('admin.points')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="number" min="1" name="points" id="points"
                                       class="form-control @error('points') border-danger @enderror"
                                       placeholder="{{__('admin.points')}}" value="{{ old('points') }}">
                            </div>
                            @error('points')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <button name="save" value="2" class="btn btn-outline-danger float-right"><i class="icon-floppy-disk"></i> {{__('admin.decrease')}}</button>
                            <button name="save" value="1" class="btn btn-outline-success float-right mr-2"><i class="icon-floppy-disk"></i> {{__('admin.increase')}}</button>
                            <x-back route="admin.loyalty_point.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
@stop
