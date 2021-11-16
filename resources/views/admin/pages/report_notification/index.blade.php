@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Report for notifications</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Report for notifications</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Search report</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body search-item">
                <form action="" method="get">
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="user_id">{{__('admin.user')}}</label>
                            <select name="user_id" class="select-search" id="user_id">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($appUsers as $user)
                                    <option
                                        {{ request('user_id') == $user->id ? 'selected' : '' }}  value="{{ $user->id }}">{{ $user->firstname." ".$user->lastname." - ".$user->email }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="store_id">{{__('admin.store')}}</label>
                            <select name="store_id" class="select-search" id="store_id">
                                <option value="">{{ __('admin.all') }}</option>
                                @foreach($stores as $store)
                                    <option
                                        {{ request('store_id') == $store->id ? 'selected' : '' }}  value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <x-search/>
                            <x-showall route="{{$module_name}}.report_notification.index"/>
                            <x-clear/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @include('admin.particles._sessionmessage')
    <!-- Basic table -->
        <div class="card" style="zoom: 1;">
            <div class="table-responsive" style="">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Store</th>
                        <th>Reason</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $report)
                        <tr id="tr_{{$report->id}}">
                            <td>{{ $report->id }}</td>
                            <td>{!! $report->firstname." ".$report->lastname."<br /><b>".$report->email."</b>" !!}</td>
                            <td>{{ $report->store_name }}</td>
                            <td>{{ $report->reason }}</td>
                            <td>{{ $report->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                {{ $reports->links('pagination::bootstrap-4') }}
                <span class="text-muted">{{ ($reports->currentPage() * config('global.pagination_count') >= $reports->total()) ? ($reports->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $reports->total() : ($reports->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $reports->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $reports->total() }}
                        </span>
            </div>
        </div>
        <!-- /basic table -->
    </div>
    <!-- /content area -->

@endsection
