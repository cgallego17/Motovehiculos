@extends('layouts.inicio')

@section('menu')
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ url('/') }}" class="logo">Moto<em> Vehiculos</em></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="{{ url('/') }}" class="active">Inicio</a></li>
              <li><a href="{{ url('/vehiculos') }}">Vehiculos</a></li>
              @if (Route::has('login'))                
                    @auth
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/publicar#trainers') }}">Mis Publicaciones</a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Cerrar sesión') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </div>
                        </li>
                        <a href="{{ url('/publicar#crearpublicacion') }}" type="button" class="btn btn-primary">Publicar Ahora !</a>
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

@section('banner')
<div class="main-banner" id="top">
  <video autoplay muted loop id="bg-video">
    <source src="assets/images/video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="caption">
      <h2>El mejor <em>concesionario de vehiculos </em>de la ciudad!</h2>
      <div class="main-button">
      @if (Route::has('login'))
      @auth
      <a href="{{ url('/publicar#crearpublicacion') }}" type="button" class="btn btn-primary">Publicar Ahora !</a>
        
      @endauth
      @else
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
          data-target=".bd-example-modal-lg">Publicar Ahora !</button>

      @endif
      </div>
    </div>
  </div>
</div>
@endsection

@section('cars')
<section class="section" id="trainers">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Todas las <em>Publicaciones </em></h2>
          <img src="assets/images/line-dec.png" alt="waves">
          @if($vehihome->count() == 0)
            <h2>Aun no tienes publicaciones Realizadas</h2>
          @else
          <p>Estas son las 6 ultimas Publicaciones</p>
          @endif
        </div>
      </div>
      @foreach( $vehihome as $publica )
      <div class="col-lg-4">
        <div class="trainer-item">
          <div class="image-thumb">
            <img src="{{ asset('storage'.'/'.$publica->Foto) }}" alt="">
          </div>
          <div class="down-content">
            <span>
              <sup>$</sup>{{$publica->Precio}}
            </span>

            <h4>{{$publica->Titulo}}</h4>

            <p>
              <i class="fa fa-dashboard"></i> {{$publica->Kilometraje}}km &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cube"></i> {{$publica->Cilindraje}}cc &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cog"></i> {{$publica->Transmision}} &nbsp;&nbsp;&nbsp;
            </p>
            <p>
              <i class="fa fa-calendar"></i> {{$publica->Año}} &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cube"></i> {{$publica->Cilindraje}}cc &nbsp;&nbsp;&nbsp;
              <i class="fa fa-paint-brush"></i> {{$publica->Color}} &nbsp;&nbsp;&nbsp;
            </p>
            <p>
            <a href="https://wa.me/{{$publica->Telefono}}?text=Vi%20tu%20publicacion%20--{{$publica->Titulo}}--%20${{$publica->Precio}}%20en%20Motovehiculos.com" class="btn btn-success fa fa-whatsapp" role="button"> Contactar Vendedor</a>
            </p>
            <!-- <ul class="social-icons">
              <li><a href="car-details.html">+ View Car</a></li>
            </ul> -->
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
  <div class="main-button text-center">
      <a href="{{ url('/vehiculos') }}">Ver Todas Las Publicaciones</a>
    </div>
</section>

    <br>

    
  </div>
</section>
@endsection



