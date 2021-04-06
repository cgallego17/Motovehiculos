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
          <p>Publica y vende tu carro gratis y en tiempo record. Vender carros nunca fue tan facil, publicar es GRATIS,
            rápido y sin comisiones. 100% Gratis 100% Efectivo.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="cta-content text-center">
          <p>Publica un anuncio. Vende tu carro sin complicaciones. Los carros con más fotos y una buena descripción se
            venden más rápido.</p>

          <p>Completa el formulario de venta, ten presente que los campos de color verde son obligatorios.
            Ingresa la información de ubicación de tu carro, tu carro estará visible en el país, estado y ciudad que
            hayas elegido.
            Sube las fotos de tu carro. Pueden ser de cualquier tipo de carro, auto, o coche, nuevo, usado, viejo,
            clásico e incluso roto.
            Haz click en continuar para publicar tu carro.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection



@section('testimonios')

<section class="section" id="crearpublicacion">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h2>Crear <em>Publicación</em></h2>
          <img src="assets/images/line-dec.png" alt="waves">
          <p>Completa el formulario de venta, ten presente que los campos de color ROJO son obligatorios. <br>
            Pueden ser de cualquier tipo de carro, auto, o coche, nuevo, usado, viejo, clásico e incluso roto. Haz click
            en continuar para publicar tu carro.</p>
        </div>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close"
                data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
            @endforeach
          </div>

          <form action="{{url('/publicacion')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="text-center">
              <h4>Todos los campos de este formulario son obligatorios.</h4>
            </div>
            <br>
            <input id="user_id " name="usi" type="hidden" value="{{auth()->id()}}">
            <div class="form-group">
              <label for="Titulo">Título Publicación</label>
              <input type="text" name="Titulo" class="form-control" id="Titulo" placeholder="Vendo Hermoso Vehículo..." required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputEmail4">Marca</label>
                <input type="text" class="form-control" name="Marca" id="Marca" required
                  placeholder="Honda, Bmw, Toyota, Volkswagen...">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Modelo</label>
                <input type="text" class="form-control" name="Modelo" id="Modelo" required
                  placeholder="Civic, Serie 3, Corolla, Jetta...">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Tipo</label>
                <input type="text" class="form-control" name="Tipo" id="Tipo" placeholder="Carro, Moto..." required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Color</label>
                <input type="text" class="form-control" name="Color" id="Color" placeholder="Blanco, Negro, Azul..." required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Placa</label>
                <input type="text" class="form-control" name="Placa" id="Placa" placeholder="ABC123" required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Cilindraje</label>
                <input type="text" class="form-control" name="Cilindraje" id="Cilindraje" placeholder="1.600 C.C" required>
              </div>
              <div class="form-group col-md-2">
                <label for="Kilometraje">Kilometraje</label>
                <input type="number" class="form-control" name="Kilometraje" id="Kilometraje" placeholder="106000" required>
              </div>
              <div class="form-group col-md-3">
                <label for="Transmision">Transmision</label>
                <input type="text" class="form-control" name="Transmision" id="Transmision" required
                  placeholder="Manual, Automatica">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Año Modelo</label>
                <input type="text" class="form-control" name="Año" id="Año" placeholder="Año Matriculado" required>
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">Precio Vehiculo</label>
                <input type="number" min="1000" class="form-control" name="Precio" id="Precio" placeholder="$" required>
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Telefono de contacto</label>
                <input type="number" class="form-control" name="Telefono" id="Telefono" placeholder="300123132" required>
              </div>
              <div class="form-group col-md-12">
                <label for="exampleFormControlFile1">Foto Vehículo</label>
                <input type="file" class="form-control-file" name="Foto" id="Foto" required>
              </div>
            </div>
            <div class="main-button text-center">
              <button type="submit" class="btn btn-primary">Publicar Vehiculo</button>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
</section>




<section class="section" id="trainers">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Mis <em>Publicaciones ({{ $acara->count() }})</em></h2>
          <img src="assets/images/line-dec.png" alt="waves">
          @if($acara->count() == 0)
            <h2>Aun no tienes publicaciones Realizadas</h2>
          @else
          <p>Aquí encontraras las publicaciones realizadas por usted</p>
          @endif
        </div>
      </div>
      @foreach( $acara as $publica )
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

            <form action="{{ url( '/publicacion/'.$publica->id ) }}" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿ Seguro Quieres Borrar Esta Publicacion ?')" class="btn btn-danger btn-sm">Borrar</button>
            </form>
          </p>
            <!-- <ul class="social-icons">
              <li><a href="car-details.html">+ View Car</a></li>
            </ul> -->
          </div>
        </div>
      </div>
      @endforeach
    </div>
    

    <div class="main-button text-center">
      <a href="{{ url('/vehiculos') }}">Ver Todas Las Publicaciones</a>
    </div>

  </div>
</section>

@endsection