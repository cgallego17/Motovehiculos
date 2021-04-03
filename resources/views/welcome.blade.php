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
                            <a class="dropdown-item" href="{{ route('login') }}">Mis Publicaciones</a>

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
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
          data-target=".bd-example-modal-lg">Publicar Ahora !</button>
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
          <h2>Featured <em>Cars</em></h2>
          <img src="assets/images/line-dec.png" alt="">
          <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum
            massa consequat eu.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="trainer-item">
          <div class="image-thumb">
            <img src="assets/images/product-1-720x480.jpg" alt="">
          </div>
          <div class="down-content">
            <span>
              <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
            </span>

            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

            <p>
              <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
            </p>

            <ul class="social-icons">
              <li><a href="car-details.html">+ View Car</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="trainer-item">
          <div class="image-thumb">
            <img src="assets/images/product-2-720x480.jpg" alt="">
          </div>
          <div class="down-content">
            <span>
              <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
            </span>

            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

            <p>
              <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
            </p>

            <ul class="social-icons">
              <li><a href="car-details.html">+ View Car</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="trainer-item">
          <div class="image-thumb">
            <img src="assets/images/product-3-720x480.jpg" alt="">
          </div>
          <div class="down-content">
            <span>
              <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
            </span>

            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

            <p>
              <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
              <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
            </p>

            <ul class="social-icons">
              <li><a href="car-details.html">+ View Car</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="main-button text-center">
      <a href="cars.html">View Cars</a>
    </div>
  </div>
</section>
@endsection

@section('about')
  <section class="section section-bg" id="schedule"
    style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading dark-bg">
            <h2>Read <em>About Us</em></h2>
            <img src="assets/images/line-dec.png" alt="">
            <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum
              massa consequat eu.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="cta-content text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident
              consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim!
              Eos, sunt, quidem.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet
              tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla!
              Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus,
              eligendi, illum. Distinctio, non!</p>
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

