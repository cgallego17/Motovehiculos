@section('menu')
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="" class="logo">Moto<em> Vehiculos</em></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="{{ url('/') }}" class="active">Inicio</a></li>
              <li><a href="cars.html">Vehiculos</a></li>
              <li><a href="contact.html">Contactenos</a></li>
              @if (Route::has('login'))                
                    @auth
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/publicar#publicaciones') }}">Mis Publicaciones</a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Cerrar sesión') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </div>
                        </li>
                        <a href="{{ url('/home') }}" type="button" class="btn btn-primary">Publicar Ahora !</a>
                    @else
            
                        <li><a data-toggle="modal" data-target="#login">Ingreso-></a></li>

                        @if (Route::has('register'))
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Publicar Ahora !</button>
                        @endif
                    @endauth
              @endif
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
@endsection