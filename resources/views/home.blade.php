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
                <a class="dropdown-item" href="{{ route('publicar') }}">Mis Publicaciones</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            <a href="{{ url('/publicar') }}" type="button" class="btn btn-primary">Publicar Ahora !</a>
            @else

            <li><a data-toggle="modal" data-target="#login">Ingreso-></a></li>

            @if (Route::has('register'))
            <button type="button" class="btn btn-primary" data-toggle="modal"
              data-target=".bd-example-modal-lg">Publicar Ahora !</button>
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
@section('about')
  <section class="section section-bg" id="schedule"
    style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading dark-bg">
            <h2>Publica tu <em>Usado Gratis</em></h2>
            <img src="assets/images/line-dec.png" alt="">
            <p>Publica y vende tu carro gratis y en tiempo record. Vender carros nunca fue tan facil, publicar es GRATIS, rápido y sin comisiones. 100% Gratis 100% Efectivo.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="cta-content text-center">
            <p>Publica un anuncio. Vende tu carro sin complicaciones. Los carros con más fotos y una buena descripción se venden más rápido.</p>
  
            <p>Completa el formulario de venta, ten presente que los campos de color verde son obligatorios.
              Ingresa la información de ubicación de tu carro, tu carro estará visible en el país, estado y ciudad que hayas elegido.
              Sube las fotos de tu carro. Pueden ser de cualquier tipo de carro, auto, o coche, nuevo, usado, viejo, clásico e incluso roto.
              Haz click en continuar para publicar tu carro.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('testimonios')
  <section class="section" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Read our <em>Testimonials</em></h2>
            <img src="assets/images/line-dec.png" alt="waves">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo
              necessitatibus?</p>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="features-items">
            <li class="feature-item">
              <div class="left-icon">
                <img src="assets/images/features-first-icon.png" alt="First One">
              </div>
              <div class="right-content">
                <h4>John Doe</h4>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus,
                    impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
              </div>
            </li>
            <li class="feature-item">
              <div class="left-icon">
                <img src="assets/images/features-first-icon.png" alt="second one">
              </div>
              <div class="right-content">
                <h4>John Doe</h4>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus,
                    impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="features-items">
            <li class="feature-item">
              <div class="left-icon">
                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
              </div>
              <div class="right-content">
                <h4>John Doe</h4>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus,
                    impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
              </div>
            </li>
            <li class="feature-item">
              <div class="left-icon">
                <img src="assets/images/features-first-icon.png" alt="training fifth">
              </div>
              <div class="right-content">
                <h4>John Doe</h4>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus,
                    impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <br>

      <div class="main-button text-center">
        <a href="testimonials.html">Read More</a>
      </div>
    </div>
  </section>
  @endsection