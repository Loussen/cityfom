@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> - Categories</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('admin.category.create')}}" class="btn btn-outline-success float-right"><i class="icon-plus2"></i> Add New</a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Categories</span>
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
                    <h5 class="card-title">Search category</h5>
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
                                <label for="name">{{__('admin.name')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('admin.name') }}" value="{{request('name')}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="status">{{__('admin.status')}}</label>
                                <select name="status" class="select" id="status">
                                    <option value="">{{ __('admin.all') }}</option>
                                    <option {{ request('status') == 1 ? 'selected' : '' }}  value="1">{{ __('admin.enable') }}</option>
                                    <option {{ request('status') == '0' ? 'selected' : '' }} value="0">{{ __('admin.disable') }}</option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <x-search/>
                                <x-showall route="admin.category.index"/>
                                <x-clear />
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @include('admin.particles._sessionmessage')
            <!-- Basic table -->
            <div class="card" style="zoom: 1;">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Categories</h5>
                </div>

                <div class="table-responsive" style="">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name (EN)</th>
                            <th>Name (AZ)</th>
                            <th>Name (ES)</th>
                            <th>Name (RU)</th>
                            <th>Icon</th>
                            <th>Places</th>
                            <th>Status</th>
                            <th>Filter</th>
                            <th class="text-center"><i class="icon-menu7"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name_en }}</td>
                                <td>{{ $category->name_az }}</td>
                                <td>{{ $category->name_es }}</td>
                                <td>{{ $category->name_ru }}</td>
                                <td>{{ $category->icon }}</td>
                                <td>{{ $category->icon }}</td>
                                <td>{{ $category->status }}</td>
                                <td>{{ $category->filter }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-edit route="admin.category.edit" :id="$category->id"/>
                                        <x-delete route="admin.category.destroy" :id="$category->id"/>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                    {{ $categories->links('pagination::bootstrap-4') }}
                    <span class="text-muted">{{ ($categories->currentPage() * config('global.pagination_count') >= $categories->total()) ? ($categories->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $categories->total() : ($categories->currentPage() * config('global.pagination_count') - config('global.pagination_count')) ." - ". $categories->currentPage() * config('global.pagination_count') }}
                        /
                        {{ $categories->total() }}
                        </span>
                </div>
            </div>
            <!-- /basic table -->
        </div>
        <!-- /content area -->

@endsection
