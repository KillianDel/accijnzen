<header>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="{{ asset('media/logo.png') }}" alt="Accijnzen" width="70" height="70"></a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link px-3" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Uitloggen</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
          @csrf
        </form>
      </li>
      <div class="nav-item text-nowrap">
        <li><a class="nav-link px-3" href="{{route('profile.edit')}}">Mijn profiel</a></li>
      </div>
    </ul>
  </nav>
</header>
<div class="container-fluid">
  <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start  px-3 pt-2 text-white min-vh-100">
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                      <a href="/" class="nav-link align-middle  text-decoration-none px-0">
                          <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Site</span>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link align-middle px-0">
                      <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Cursussen</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('news.get') }}" class="nav-link align-middle px-0">
                      <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Nieuws</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link align-middle px-0">
                      <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Contact</span>
                  </a>
                </li>
              </ul>
              <hr>
          </div>
      </div>