@extends('admin.layouts.app')@section('title', __('admin.home'))
@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
                        Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">

            <!-- Main charts -->
            @if($moduleName == 'cms')

                <h1 class="text-center">Assigned stores</h1>

                <div class="row">

                    @foreach($cmsStores as $store)
                        <div class="col-lg-4">
                            <div class="card card-body border-top-primary">
                                <div class="text-center">
                                    <h6 class="m-0 font-weight-semibold mb-3">{{ $store->name }}</h6>

                                    <x-edit route="cms.store.edit" :id="$store->id"/>
                                    <a type="button" class="btn btn-light legitRipple"
                                       href="{{ route($moduleName.".dashboard", ['store_id'=>$store->id])."#current-store" }}"><i
                                            class="icon-reload-alt"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($viewCurrentStore === true)
                    <h1 class="text-center" id="current-store">Selected store: {{ $currentStore->name }}</h1>

                    <div class="row">
                        <!-- Progress counters -->
                        <div class="col-sm-3">

                            <a href="{{route($module_name.'.channel.index')}}">
                                <div class="card text-center">
                                    <div class="card-body">


                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="current-offer-count"></div>
                                        <!-- /progress counter -->

                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-sm-3">

                            <a href="{{route($module_name.'.coupon.index')}}">
                                <div class="card text-center">
                                    <div class="card-body">

                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="current-coupon-count"></div>
                                        <!-- /progress counter -->

                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-sm-3">

                            <a href="{{route($module_name.'.rating_review.index')}}">
                                <div class="card text-center">
                                    <div class="card-body">

                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="current-rating-count"></div>
                                        <!-- /progress counter -->

                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col-sm-3">

                            <a href="{{route($module_name.'.store.index')}}">
                                <div class="card text-center">
                                    <div class="card-body">

                                        <!-- Progress counter -->
                                        <div class="svg-center position-relative" id="current-favourite-count"></div>
                                        <!-- /progress counter -->

                                    </div>
                                </div>
                            </a>

                        </div>

                        <script>
                            DashboardProgress.init('#current-offer-count', 38, 2, '#F06292', <?=$currentOfferCount?>, 'icon-megaphone text-pink-400', 'Total offers', '');
                            DashboardProgress.init('#current-coupon-count', 38, 2, '#00c0ef', <?=$currentCouponCount?>, 'icon-price-tag2 text-aqua-400', 'Total active coupons', '');
                            DashboardProgress.init('#current-rating-count', 38, 2, '#0073b7', <?=$currentRatingCount?>, 'icon-comment text-darkblue-400', 'Total ratings', '');
                            DashboardProgress.init('#current-favourite-count', 38, 2, '#5C6BC0', <?=$currentFavCount?>, 'icon-star-full2 text-indigo-400', 'Total favourite', '');
                        </script>
                    </div>
                @endif

                <h1 class="text-center">Total count</h1>

                <div class="row">
                    <!-- Progress counters -->
                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.channel.index')}}">
                            <div class="card text-center">
                                <div class="card-body">


                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="offer-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.coupon.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="coupon-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.rating_review.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="rating-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.store.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="favourite-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <script>
                        DashboardProgress.init('#offer-count', 38, 2, '#F06292', <?=$offerCount?>, 'icon-megaphone text-pink-400', 'Total offers', '');
                        DashboardProgress.init('#coupon-count', 38, 2, '#00c0ef', <?=$couponCount?>, 'icon-price-tag2 text-aqua-400', 'Total active coupons', '');
                        DashboardProgress.init('#rating-count', 38, 2, '#0073b7', <?=$ratingCount?>, 'icon-comment text-darkblue-400', 'Total ratings', '');
                        DashboardProgress.init('#favourite-count', 38, 2, '#5C6BC0', <?=$favCount?>, 'icon-star-full2 text-indigo-400', 'Total favourite', '');
                    </script>
                </div>
            @else
                <div class="row">
                    <!-- Progress counters -->
                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.app_users.index')}}">
                            <div class="card text-center">
                                <div class="card-body">


                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="users-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.store.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="store-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.coupon.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="coupon-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-sm-3">

                        <a href="{{route($module_name.'.rating_review.index')}}">
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="rating-count"></div>
                                    <!-- /progress counter -->

                                </div>
                            </div>
                        </a>

                    </div>

                    <script>
                        DashboardProgress.init('#users-count', 38, 2, '#F06292', <?=$userCount?>, 'icon-users text-pink-400', 'Total users', '');
                        DashboardProgress.init('#store-count', 38, 2, '#5C6BC0', <?=$storeCount?>, 'icon-store text-indigo-400', 'Total stores', '');
                        DashboardProgress.init('#coupon-count', 38, 2, '#00c0ef', <?=$couponCount?>, 'icon-price-tag2 text-aqua-400', 'Total active coupons', '');
                        DashboardProgress.init('#rating-count', 38, 2, '#0073b7', <?=$ratingCount?>, 'icon-comment text-darkblue-400', 'Total ratings', '');
                    </script>
                </div>
        @endif
        <!-- /main charts -->

        @if($moduleName != 'cms')
            <!-- Quick stats boxes -->
                <div class="row">

                    <div class="col-lg-6">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">This month : <u>{{ $userThisMonthCount }}</u>
                                        user(s)</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">{{ ($percentMonth <= 0 ? '-' : '+').abs($percentMonth) }}%</span>
                                </div>

                                <div>
                                    Total Users Created Percent
                                    <div class="opacity-75">Last 30 days ( Previous month :
                                        <u><b>{{ $userPrevMonthCount }}</b></u> user(s) )
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">This month : <u>{{ $userThisWeekCount }}</u>
                                        user(s)</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">{{ ($percentWeek <= 0 ? '-' : '+').abs($percentWeek) }}%</span>
                                </div>

                                <div>
                                    Total Users Created Percent
                                    <div class="opacity-75">Last 7 days ( Previous month :
                                        <u><b>{{ $userPrevWeekCount }}</b></u> user(s) )
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">This month :
                                        <u>{{ $userThisMonthLoginCount }}</u> user(s)</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">{{ ($percentMonthLogin <= 0 ? '-' : '+').abs($percentMonthLogin) }}%</span>
                                </div>

                                <div>
                                    Total Active Users Percent
                                    <div class="opacity-75">Last 30 days ( Previous month :
                                        <u><b>{{ $userPrevMonthLoginCount }}</b></u> user(s) )
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">This month :
                                        <u>{{ $userThisWeekLoginCount }}</u> user(s)</h3>
                                    <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">{{ ($percentWeekLogin <= 0 ? '-' : '+').abs($percentWeekLogin) }}%</span>
                                </div>

                                <div>
                                    Total Active Users Percent
                                    <div class="opacity-75">Last 7 days ( Previous month :
                                        <u><b>{{ $userPrevWeekLoginCount }}</b></u> user(s) )
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /members online -->

                    </div>
                </div>
                <!-- /quick stats boxes -->
        @endif

        <!-- Dashboard content -->
            <!-- Stacked lines -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Stores' favourites</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a> <a class="list-icons-item"
                                                                                      data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="line_stacked"></div>
                    </div>
                </div>
            </div>

            <script>
                EchartsLinesStackedLight.init(['<?php echo implode("','", $storeName); ?>'], [<?php echo implode(',', $storeFavCount) ?>]);
            </script>

            <!-- /stacked lines -->
            <!-- /dashboard content -->

        </div>
        <!-- /content area -->

    </div>
@endsection
