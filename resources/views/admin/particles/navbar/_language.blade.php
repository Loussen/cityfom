<li class="nav-item dropdown">
    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{asset('assets/global_assets/images/lang')}}/{{ app()->getLocale() }}.png" class="img-flag mr-2">
        {{ $current_language ?? '' }}
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        {{-- @foreach($languages as $language)
        <a href="" class="dropdown-item {{ strtolower($language->name) }}"><img src="{{asset('assets/global_assets/images/lang')}}/{{ $language->code }}.png" class="img-flag"> {{ $language->name }}</a>
        @endforeach --}}
    </div>
</li>
