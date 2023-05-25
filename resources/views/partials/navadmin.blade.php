<header class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
      <img src="{{ asset('media/logo.png') }}" alt="Flash" width="50" height="50">
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Uitloggen</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
      </form>
      <div class="nav-item text-nowrap">
        <li><a class="nav-link px-3" href="{{route('profile.edit')}}">Mijn profiel</a></li>
      </div>
    </div>
  </div>
</header>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 mt-3 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/cursussen') ? 'active' : '' }}" href="{{ route('cursus.get') }}">
          <span data-feather="book-open"></span>
          Cursussen
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/news') ? 'active' : '' }}" href="{{ route('news.get') }}">
          <span data-feather="coffee"></span>
          Nieuws
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/contact') ? 'active' : '' }}" href="{{ route('contact.dash') }}">
          <span data-feather="message-square"></span>
          Contact
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/">
          <span data-feather="layout"></span>
          Terug naar site
        </a>
      </li>
    </ul>
    <hr>
  </div>
</nav>