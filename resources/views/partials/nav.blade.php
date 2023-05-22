<!-- Navigatie -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
      <div class="container-fluid">
  
          <!-- LOGO -->
        <a class="navbar-brand" href="#">
          <img src="{{ asset('media/logo.png') }}" alt="Accijnzen" width="150" height="70">
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
              <a class="nav-link {{ request()->is('/cursussen') ? 'active' : '' }}" href="">Cursussen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/over-mij') ? 'active' : '' }}" href="">Over mij</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/contact') ? 'active' : '' }}" href="">Contacteer me</a>
            </li>
          
          </ul>
        </div>
            <li class="nav-item dropdown" style="list-style-type: none;">
              <a class="nav-link dropdown-toggle navbar-brand"  data-bs-toggle="dropdown" aria-expanded="false" role="button"  href="#">
                <img src="{{ asset('media/profiel.png') }}" alt="Verbroedering" width="100" height="80">
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