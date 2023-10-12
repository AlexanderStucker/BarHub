    <header class="header">
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li>
            <a class="main-nav-link {{ Route::currentRouteNamed('home') ? 'nav-current' : '' }}" href="{{ route('home') }}">über uns</a>
          </li>
          <li><a class="main-nav-link {{ Route::currentRouteNamed('drinks') ? 'nav-current' : '' }}" href="{{ route('drinks') }}">Getränke</a></li>
          <li><a class="main-nav-link {{ Route::currentRouteNamed('food') ? 'nav-current' : '' }}" href="{{ route('food') }}">Essen</a></li>
          <li><a class="main-nav-link nav-logo" href="{{ route('home') }}">BarHub</a></li>
          <li><a class="main-nav-link {{ Route::currentRouteNamed('events') ? 'nav-current' : '' }}" href="{{ route('events') }}">Events</a></li>
          <li><a class="main-nav-link {{ Route::currentRouteNamed('team') ? 'nav-current' : '' }}" href="{{ route('team') }}">Unser Team</a></li>
          <li><a class="main-nav-link {{ Route::currentRouteNamed('contact') ? 'nav-current' : '' }}" href="{{ route('contact') }}">Reservation</a></li>
        </ul>
      </nav>
    </header>
