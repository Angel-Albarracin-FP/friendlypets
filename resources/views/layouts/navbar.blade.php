<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-principal">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'FriendlyPets') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/noticias') }}">Noticias <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/avisos') }}">Avisos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Disabled</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
        @guest
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item active">
          @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
        </li>
        @else
        <li class="nav-item active dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/perfil') }}">Perfil</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
</header>