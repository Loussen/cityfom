<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body"
                 style="background: url({{asset("admin/global_assets/images/backgrounds/user_bg3.jpg")}}) center center no-repeat; background-size: cover;">
                <div class="card-body text-center">
                    <a href="{{ route($module_name.'.profile.profile') }}">
                        <img src="{{asset('/uploads/profile_admin/'.auth()->guard('admin')->user()->photo)}}"
                             class="img-fluid rounded-circle shadow-1 mb-3 " width="100" height="100" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{auth()->guard('admin')->user()->firstname." ".auth()->guard('admin')->user()->lastname}}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{auth()->guard('admin')->user()->email}}</span>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav"
                       class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle legitRipple"
                       data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="{{route($module_name.'.profile.profile')}}" class="nav-link legitRipple">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route($module_name.'.password.password')}}" class="nav-link legitRipple">
                            <i class="icon-lock"></i>
                            <span>Change password</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        @if($module_name == 'admin')
                            <a href="#" class="nav-link legitRipple"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                                Logout</a>
                            <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" >
                                @csrf
                            </form>
                        @elseif($module_name == 'cms')
                            <a href="#" class="nav-link legitRipple"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                                Logout</a>
                            <form id="logout-form" action="{{ route('cmsLogout') }}" method="POST" >
                                @csrf
                            </form>
                        @elseif($module_name == 'subadmin')
                            <a href="#" class="nav-link legitRipple"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                                Logout</a>
                            <form id="logout-form" action="{{ route('subadminLogout') }}" method="POST" >
                                @csrf
                            </form>
                        @endif

                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route($module_name.'.dashboard')}}" class="nav-link active legitRipple">
                        <i class="icon-home"></i>
                        <span>
									Dashboard

								</span>
                    </a>
                </li>
                @if(auth()->guard('admin')->user()->can('cms-users-list') || auth()->guard('admin')->user()->can('app-users-list'))
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="icon-users"></i> <span>Users</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Users">
                            @if(auth()->guard('admin')->user()->can('cms-users-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.cms_users.index')}}"
                                                    class="nav-link legitRipple">CMS users</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('app-users-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.app_users.index')}}" class="nav-link active legitRipple">App users</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('category-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.category.index')}}" class="nav-link legitRipple">
                            <i class="icon-menu"></i>
                            <span>
                                        Category
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('coupons-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.coupon.index')}}" class="nav-link legitRipple">
                            <i class="icon-price-tag2"></i>
                            <span>
                                        Coupon
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('rating-reviews-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.rating_review.index')}}" class="nav-link legitRipple">
                            <i class="icon-star-full2"></i>
                            <span>
                                        Rating & Review
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('cms-pages-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.cms_pages.index')}}" class="nav-link legitRipple">
                            <i class="icon-list2"></i>
                            <span>
                                        CMS pages
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('report-notifications-list') || auth()->guard('admin')->user()->can('report-stores-list') || auth()->guard('admin')->user()->can('report-type-list'))
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="icon-blocked"></i> <span>Reports</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Reports">
                            @if(auth()->guard('admin')->user()->can('report-notifications-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.report_notification.index')}}"
                                                        class="nav-link legitRipple">Notification</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('report-stores-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.report_store.index')}}" class="nav-link legitRipple">Store</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('report-type-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.report_type.index')}}"
                                                        class="nav-link legitRipple">Report types</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('channel-list') || auth()->guard('admin')->user()->can('channel-post-list'))
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="icon-megaphone"></i> <span>Channels & Posts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Channels & Posts">
                            @if(auth()->guard('admin')->user()->can('channel-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.channel.index')}}"
                                                        class="nav-link legitRipple">Channel</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('channel-post-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.channel_post.index')}}" class="nav-link legitRipple">Posts</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('email-templates-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.email_templates.index')}}" class="nav-link legitRipple">
                            <i class="icon-mail5"></i>
                            <span>
                                        Email templates
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('general-messages-list') || auth()->guard('admin')->user()->can('loyalty-messages-list') || auth()->guard('admin')->user()->can('loyalty-point-list'))
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="icon-mailbox"></i> <span>Loyalty messages</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="General message">
                            @if(auth()->guard('admin')->user()->can('general-messages-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.general_message.index')}}"
                                                        class="nav-link legitRipple">General message</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('loyalty-messages-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.loyalty_message.index')}}" class="nav-link legitRipple">Conditions</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('loyalty-point-list'))
                                <li class="nav-item"><a href="{{route($module_name.'.loyalty_point.index')}}"
                                                        class="nav-link legitRipple">Points</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('settings-password') || auth()->guard('admin')->user()->can('settings-configs') || auth()->guard('admin')->user()->can('settings-profile'))
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="icon-cog"></i> <span>Settings</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Change password">
                            @if(auth()->guard('admin')->user()->can('settings-password'))
                                <li class="nav-item"><a href="{{route($module_name.'.password.password')}}"
                                                        class="nav-link legitRipple">Change password</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('settings-configs'))
                                <li class="nav-item"><a href="{{route($module_name.'.configs.configs')}}" class="nav-link legitRipple">Global configs</a></li>
                            @endif
                            @if(auth()->guard('admin')->user()->can('settings-profile'))
                                <li class="nav-item"><a href="{{route($module_name.'.profile.profile')}}"
                                                        class="nav-link legitRipple">Profile</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('stores-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.store.index')}}" class="nav-link legitRipple">
                            <i class="icon-cart"></i>
                            <span>
                                        Stores
                                    </span>
                        </a>
                    </li>
                @endif
                @if(auth()->guard('admin')->user()->can('role-list'))
                    <li class="nav-item">
                        <a href="{{route($module_name.'.roles.index')}}" class="nav-link legitRipple">
                            <i class="icon-cogs"></i>
                            <span>
                                        Roles
                                    </span>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link legitRipple"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                        Logout</a>
                    <form id="logout-form" action="{{ route($module_name.'Logout') }}" method="POST" >
                        @csrf
                    </form>
                </li>
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-copy"></i> <span>Layouts</span></a>--}}

{{--                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">--}}
{{--                        <li class="nav-item"><a href="../../../../layout_1/LTR/default/full/index.html"--}}
{{--                                                class="nav-link legitRipple">Default layout</a></li>--}}
{{--                        <li class="nav-item"><a href="index.html" class="nav-link active legitRipple">Layout 2</a></li>--}}
{{--                        <li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html"--}}
{{--                                                class="nav-link legitRipple">Layout 3</a></li>--}}
{{--                        <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html"--}}
{{--                                                class="nav-link legitRipple">Layout 4</a></li>--}}
{{--                        <li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html"--}}
{{--                                                class="nav-link legitRipple">Layout 5</a></li>--}}
{{--                        <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html"--}}
{{--                                                class="nav-link disabled">Layout 6 <span--}}
{{--                                    class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-color-sampler"></i> <span>Themes</span></a>--}}

{{--                    <ul class="nav nav-group-sub" data-submenu-title="Themes">--}}
{{--                        <li class="nav-item"><a href="../../../LTR/default/full/index.html"--}}
{{--                                                class="nav-link legitRipple">Default</a></li>--}}
{{--                        <li class="nav-item"><a href="index.html" class="nav-link active legitRipple">Material</a></li>--}}
{{--                        <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link legitRipple">Dark</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean--}}
{{--                                <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-stack"></i> <span>Starter kit</span></a>--}}

{{--                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">--}}
{{--                        <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link legitRipple">Horizontal--}}
{{--                                navigation</a></li>--}}
{{--                        <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link legitRipple">No--}}
{{--                                sidebar</a></li>--}}
{{--                        <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link legitRipple">1--}}
{{--                                sidebar</a></li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">2 sidebars</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_secondary.html"--}}
{{--                                                        class="nav-link legitRipple">Secondary sidebar</a></li>--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link legitRipple">Right--}}
{{--                                        sidebar</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">3 sidebars</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_right_hidden.html"--}}
{{--                                                        class="nav-link legitRipple">Right sidebar hidden</a></li>--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_right_visible.html"--}}
{{--                                                        class="nav-link legitRipple">Right sidebar visible</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Content sidebars</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_content_left.html"--}}
{{--                                                        class="nav-link legitRipple">Left sidebar</a></li>--}}
{{--                                <li class="nav-item"><a href="../seed/sidebar_content_right.html"--}}
{{--                                                        class="nav-link legitRipple">Right sidebar</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link legitRipple">Boxed--}}
{{--                                layout</a></li>--}}
{{--                        <li class="nav-item-divider"></li>--}}
{{--                        <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link legitRipple">Fixed--}}
{{--                                main navbar</a></li>--}}
{{--                        <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link legitRipple">Fixed--}}
{{--                                secondary navbar</a></li>--}}
{{--                        <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link legitRipple">Both--}}
{{--                                navbars fixed</a></li>--}}
{{--                        <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link legitRipple">Fixed--}}
{{--                                layout</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link legitRipple"><i--}}
{{--                            class="icon-width"></i> <span>RTL version</span></a></li>--}}
{{--                <!-- /main -->--}}

{{--                <!-- Layout -->--}}
{{--                <li class="nav-item-header">--}}
{{--                    <div class="text-uppercase font-size-xs line-height-xs">Layout</div>--}}
{{--                    <i class="icon-menu" title="Layout options"></i></li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-stack2"></i> <span>Page layouts</span></a>--}}

{{--                    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">--}}
{{--                        <li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link legitRipple">Fixed--}}
{{--                                navbar</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link legitRipple">Fixed--}}
{{--                                sidebar - custom scroll</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link legitRipple">Fixed--}}
{{--                                sidebar - native scroll</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link legitRipple">Fixed--}}
{{--                                footer</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_hideable_navbar.html" class="nav-link legitRipple">Hideable--}}
{{--                                navbar</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_without_header.html" class="nav-link legitRipple">Without--}}
{{--                                page header</a></li>--}}
{{--                        <li class="nav-item-divider"></li>--}}
{{--                        <li class="nav-item"><a href="layout_boxed_default.html" class="nav-link legitRipple">Boxed with--}}
{{--                                default sidebar</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link legitRipple">Boxed with--}}
{{--                                mini sidebar</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_boxed_full.html" class="nav-link legitRipple">Boxed full--}}
{{--                                width</a></li>--}}
{{--                        <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link legitRipple">Boxed--}}
{{--                                content</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-page-break2"></i> <span>Headers &amp; footers</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Content styling">--}}
{{--                        <li class="nav-item"><a href="content_page_header.html" class="nav-link legitRipple">Page--}}
{{--                                header</a></li>--}}
{{--                        <li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer--}}
{{--                                <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Sidebars">--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Main sidebar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="sidebar_default_collapse.html"--}}
{{--                                                        class="nav-link legitRipple">Default collapsible</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link legitRipple">Default--}}
{{--                                        hideable</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link legitRipple">Default--}}
{{--                                        hidden</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link legitRipple">Mini--}}
{{--                                        collapsible</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link legitRipple">Mini--}}
{{--                                        hideable</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link legitRipple">Mini--}}
{{--                                        hidden</a></li>--}}
{{--                                <li class="nav-item-divider"></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_default_color_light.html"--}}
{{--                                                        class="nav-link legitRipple">Light color</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_default_color_custom.html"--}}
{{--                                                        class="nav-link legitRipple">Custom color</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Secondary sidebar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="sidebar_secondary_after.html"--}}
{{--                                                        class="nav-link legitRipple">After default</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_secondary_before.html"--}}
{{--                                                        class="nav-link legitRipple">Before default</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_secondary_hidden.html"--}}
{{--                                                        class="nav-link legitRipple">Hidden by default</a></li>--}}
{{--                                <li class="nav-item-divider"></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_secondary_color_dark.html"--}}
{{--                                                        class="nav-link legitRipple">Dark color</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_secondary_color_custom.html"--}}
{{--                                                        class="nav-link legitRipple">Custom color</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Right sidebar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="sidebar_right_default_collapse.html"--}}
{{--                                                        class="nav-link legitRipple">Show - collapse main</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_default_hide.html"--}}
{{--                                                        class="nav-link legitRipple">Show - hide main</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_default_toggle.html"--}}
{{--                                                        class="nav-link legitRipple">Show - fix default width</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_mini_toggle.html"--}}
{{--                                                        class="nav-link legitRipple">Show - fix mini width</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_secondary_hide.html"--}}
{{--                                                        class="nav-link legitRipple">Show - hide secondary</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link legitRipple">Visible--}}
{{--                                        by default</a></li>--}}
{{--                                <li class="nav-item-divider"></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_color_dark.html"--}}
{{--                                                        class="nav-link legitRipple">Dark color</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_right_color_custom.html"--}}
{{--                                                        class="nav-link legitRipple">Custom color</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Content sidebar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="sidebar_content_left.html" class="nav-link legitRipple">Left--}}
{{--                                        position</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_left_stretch.html"--}}
{{--                                                        class="nav-link legitRipple">Left stretched</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_left_hidden.html"--}}
{{--                                                        class="nav-link legitRipple">Left hidden</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_right.html" class="nav-link legitRipple">Right--}}
{{--                                        position</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_right_stretch.html"--}}
{{--                                                        class="nav-link legitRipple">Right stretched</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_right_hidden.html"--}}
{{--                                                        class="nav-link legitRipple">Right hidden</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_sections.html"--}}
{{--                                                        class="nav-link legitRipple">Sectioned sidebar</a></li>--}}
{{--                                <li class="nav-item-divider"></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_color_dark.html"--}}
{{--                                                        class="nav-link legitRipple">Dark color</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_color_custom.html"--}}
{{--                                                        class="nav-link legitRipple">Custom color</a></li>--}}
{{--                                <li class="nav-item"><a href="sidebar_content_color_sections_custom.html"--}}
{{--                                                        class="nav-link legitRipple">Custom sections color</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item-divider"></li>--}}
{{--                        <li class="nav-item"><a href="sidebar_components.html" class="nav-link legitRipple">Sidebar--}}
{{--                                components</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-menu3"></i> <span>Navbars</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Navbars">--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Single navbar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="navbar_single_top_static.html"--}}
{{--                                                        class="nav-link legitRipple">Single top static</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_top_fixed.html"--}}
{{--                                                        class="nav-link legitRipple">Single top fixed</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_bottom_static.html"--}}
{{--                                                        class="nav-link legitRipple">Single bottom static</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_bottom_fixed.html"--}}
{{--                                                        class="nav-link legitRipple">Single bottom fixed</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_header_before.html"--}}
{{--                                                        class="nav-link legitRipple">Before page header</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_header_after.html"--}}
{{--                                                        class="nav-link legitRipple">After page header</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_single_content_after.html"--}}
{{--                                                        class="nav-link legitRipple">After page content</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Multiple navbars</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_top_static.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple top static</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_top_fixed.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple top fixed</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_bottom_static.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple bottom static</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_bottom_fixed.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple bottom fixed</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_top_bottom.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple - top and bottom</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_multiple_secondary_sticky.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple - secondary sticky</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple">Content navbar</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="navbar_component_single.html"--}}
{{--                                                        class="nav-link legitRipple">Single navbar</a></li>--}}
{{--                                <li class="nav-item"><a href="navbar_component_multiple.html"--}}
{{--                                                        class="nav-link legitRipple">Multiple navbars</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item-divider"></li>--}}
{{--                        <li class="nav-item"><a href="navbar_colors.html" class="nav-link legitRipple">Color options</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="navbar_sizes.html" class="nav-link legitRipple">Sizing options</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="navbar_hideable.html" class="nav-link legitRipple">Hide on--}}
{{--                                scroll</a></li>--}}
{{--                        <li class="nav-item"><a href="navbar_components.html" class="nav-link legitRipple">Navbar--}}
{{--                                components</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-sort"></i> <span>Vertical navigation</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_collapsible.html"--}}
{{--                                                class="nav-link legitRipple">Collapsible menu</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link legitRipple">Accordion--}}
{{--                                menu</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link legitRipple">Bordered--}}
{{--                                navigation</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_right_icons.html"--}}
{{--                                                class="nav-link legitRipple">Right icons</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link legitRipple">Badges</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link legitRipple">Disabled--}}
{{--                                items</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link legitRipple">Submenu--}}
{{--                                on click</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link legitRipple">Submenu--}}
{{--                                on hover</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link legitRipple">With--}}
{{--                                custom elements</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link legitRipple">Tabbed--}}
{{--                                navigation</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link legitRipple">Disabled--}}
{{--                                navigation links</a></li>--}}
{{--                        <li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link legitRipple">Horizontal--}}
{{--                                mega menu</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item-submenu">--}}
{{--                    <a href="#" class="nav-link legitRipple"><i class="icon-tree5"></i> <span>Menu levels</span></a>--}}
{{--                    <ul class="nav nav-group-sub" data-submenu-title="Menu levels">--}}
{{--                        <li class="nav-item"><a href="#" class="nav-link legitRipple"><i class="icon-IE"></i> Second--}}
{{--                                level</a></li>--}}
{{--                        <li class="nav-item nav-item-submenu">--}}
{{--                            <a href="#" class="nav-link legitRipple"><i class="icon-firefox"></i> Second level with--}}
{{--                                child</a>--}}
{{--                            <ul class="nav nav-group-sub">--}}
{{--                                <li class="nav-item"><a href="#" class="nav-link legitRipple"><i--}}
{{--                                            class="icon-android"></i> Third level</a></li>--}}
{{--                                <li class="nav-item nav-item-submenu">--}}
{{--                                    <a href="#" class="nav-link legitRipple"><i class="icon-apple2"></i> Third level--}}
{{--                                        with child</a>--}}
{{--                                    <ul class="nav nav-group-sub">--}}
{{--                                        <li class="nav-item"><a href="#" class="nav-link legitRipple"><i--}}
{{--                                                    class="icon-html5"></i> Fourth level</a></li>--}}
{{--                                        <li class="nav-item"><a href="#" class="nav-link legitRipple"><i--}}
{{--                                                    class="icon-css3"></i> Fourth level</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item"><a href="#" class="nav-link legitRipple"><i--}}
{{--                                            class="icon-windows"></i> Third level</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a href="#" class="nav-link legitRipple"><i class="icon-chrome"></i> Second--}}
{{--                                level</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <!-- /layout -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
