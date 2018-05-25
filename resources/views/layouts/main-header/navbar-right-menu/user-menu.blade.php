<div class="dropdown">
  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
    <img src="@yield('user-avatar', 'https://www.justinmind.com/community/public/avatars/default-avatar.svg')" alt="" class="avatar">
    {{-- <span class="avatar" style="background-image: @yield('user-avatar', url('https://www.justinmind.com/community/public/avatars/default-avatar.svg'))"></span> --}}
    <span class="ml-2 d-none d-lg-block">
      <span class="text-default">@yield('user-name', 'Zandy Yudha Perwira')</span>
      <small class="text-muted d-block mt-1">@yield('user-role', 'Web Developer')</small>
    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
    @foreach (config('tabler.user_menu') as $menu)
      @if (isset($menu['badge']))
        <a class="dropdown-item" href="{{ $menu['route'] }}">
          <span class="float-right"><span class="badge badge-primary">{{ $menu['badge'] }}</span></span>
          <i class="dropdown-icon fe fe-mail"></i> {{ $menu['name'] }}
        </a>
      @else
        <a class="dropdown-item" href="{{ $menu['route'] }}">
          <i class="dropdown-icon fe fe-user"></i> {{ $menu['name'] }}
        </a>
      @endif
    @endforeach
    {{-- <a class="dropdown-item" href="#">
      <i class="dropdown-icon fe fe-user"></i> Profile
    </a>
    <a class="dropdown-item" href="#">
      <span class="float-right"><span class="badge badge-primary">6</span></span>
      <i class="dropdown-icon fe fe-mail"></i> Inbox
    </a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

      <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @if (substr(app()->version(), 0, 3) == "5.5")
        {{ csrf_field() }}
      @elseif (substr(app()->version(), 0, 3) == "5.6")
        @csrf
      @endif
    </form>
  </div>
</div>
