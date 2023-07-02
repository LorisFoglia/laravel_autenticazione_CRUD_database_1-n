<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'album.index') active @endif" aria-current="page" href="{{route('album.index')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'album.create') active @endif" aria-current="page" href="{{route('album.create')}}">Aggiungi</a>
        </li>
        @endauth
        <li class="nav-item ">
          <form class="d-flex" role="search" method="get" action="{{route('album.search')}}">
            <input class="form-control me-2" name="chiave" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @if(Auth::user() != null)
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link @if(Route::currentRouteName() == 'user.profile') active @endif" aria-current="page" href="{{route('user.profile')}}">Il tuo profilo</a>
          </li>
          <li class="nav-item">
          <form action="{{route('logout')}}" method="post" class="nav-link d-fex align-items-center">
            @csrf
              <button class="btn btn-outline-white" type="submit">Logout</button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" aria-current="page" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'login') active @endif" aria-current="page" href="{{route('login')}}">Accedi</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>