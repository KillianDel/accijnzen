<!-- Navigatie -->
<header>
  
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase fixed-top bg-dark">
      <div class="container-fluid">
  
          <!-- LOGO -->
        <a class="navbar-brand" href="#">
          <img src="{{ asset('media/logo.png') }}" alt="Accijnzen" width="80" height="80">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
  
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('cursussen') ? 'active' : '' }}" href="">Cursussen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('nieuws') ? 'active' : '' }}" href="">Nieuws</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('over-mij') ? 'active' : '' }}" href="">Over mij</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contacteer me</a>
            </li>
          
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          
        <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <li><a class="dropdown-item" href="{{route('dashboard')}}">Adminmenu</a></li>
                <li><a class="dropdown-item" href="{{route('profile.edit')}}">Mijn profiel</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Uitloggen</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
            </div>
          </div>
            <li class="nav-item dropdown" style="list-style-type: none;">
              <a class="nav-link dropdown-toggle navbar-brand"  data-bs-toggle="dropdown" aria-expanded="false" role="button"  href="#">
                <img src="{{ asset('media/profiel.png') }}" alt="Verbroedering" width="60" height="60">
              </a>
  
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('dashboard')}}">Adminmenu</a></li>
                <li><a class="dropdown-item" href="{{route('profile.edit')}}">Mijn profiel</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Uitloggen</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </ul>
            </li>
      </div>
    </nav>
  </header>