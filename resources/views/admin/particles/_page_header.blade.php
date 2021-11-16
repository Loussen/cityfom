<div class="navbar navbar-expand-md navbar-light navbar-static">

    <!-- Header with logos -->
    <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center text-center">
        <div class="navbar-brand navbar-brand-md">
            <a href="{{route($module_name.".dashboard")}}" class="d-inline-block">
                <img src="{{asset("admin/img/logotype_white.png")}}" alt="" style="height: 3rem;">
            </a>
        </div>

        <div class="navbar-brand navbar-brand-xs">
            <a href="{{route($module_name.".dashboard")}}" class="d-inline-block">
                <img src="{{asset("admin/img/logotype_white.png")}}" alt="">
            </a>
        </div>
    </div>
    <!-- /header with logos -->


    <!-- Mobile controls -->
    <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
            <a href="{{route($module_name.".dashboard")}}" class="d-inline-block">
                <img src="{{asset("admin/img/logotype_white.png")}}" alt="">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <!-- /mobile controls -->


    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block legitRipple">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="mr-md-auto"></span>

        <ul class="navbar-nav">

            @if($module_name == 'cms')
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0 legitRipple" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Jeremy Victorino</span>
                                                <span class="text-muted float-right font-size-sm">22:48</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Richard Vango</span>
                                                <span class="text-muted float-right font-size-sm">Mon</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All messages</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="" data-original-title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="" data-original-title="Settings"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endif

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('/uploads/profile_admin/'.auth()->guard('admin')->user()->photo)}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{auth()->guard('admin')->user()->firstname." ".auth()->guard('admin')->user()->lastname}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route($module_name.'.profile.profile')}}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="{{route($module_name.'.password.password')}}" class="dropdown-item"><i class="icon-lock"></i> Change password</a>
                    <div class="dropdown-divider"></div>
                    @if($module_name=='admin')
                        <a href="#" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" >
                            @csrf
                        </form>
                    @elseif($module_name == 'cms')
                        <a href="#" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('cmsLogout') }}" method="POST" >
                            @csrf
                        </form>
                    @elseif($module_name == 'subadmin')
                        <a href="#" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('subadminLogout') }}" method="POST" >
                            @csrf
                        </form>
                    @endif
                </div>
            </li>
        </ul>
    </div>
    <!-- /navbar content -->

</div>
