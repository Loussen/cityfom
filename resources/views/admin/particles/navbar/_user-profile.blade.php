<li class="nav-item dropdown dropdown-user">
    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
        <img src="{{asset('admin/global_assets/images/placeholders/user.png')}}" class="rounded-circle mr-2" height="34" alt="{{ Auth::user()->name }}">
        <span>{{ Auth::user()->name }}</span>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
            {{ __('admin.logout') }}</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" >
            @csrf
        </form>
    </div>
</li>
