<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('CelularesPeru/css/bootstrap-flex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/CelularesPeru/fontawesome/css/font-awesome.css ')}}">
  </head>
  <body>
     <!--Header-->


    <header id="header-container">
      <div class="container">
        <div class="row  flex-items-xs-between flex-items-xs-middle">
            <div class="col-xs-3 ">
              <h1>CelularesPeru</h1>
            </div>
             <div class="col-xs-3 text-xs-right">
              <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
              
                @if (Auth::guest())
                    
                            <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">Login</a>
                            
                @else
                    
                                <a href="#" class="login text-uppercase font-weigth-bold">
                                    {{ Auth::user()->name }} 
                                </a>

                        
                                 <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&#62;
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
                            
                @endif
            </div> 
        </div>
      </div>  
    </header>

    <!--Menu-->
    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 offset-xs-1 col-md-5 offset-md-0">
            <ul class="nav navbar-nav" >
              <li class="nav-item text-xs-center">
                <a href="{{url('/')}}" class="nav-link">Home</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/catalogo')}}" class="nav-link ">Catalogo</a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/carrito')}}" class="nav-link">Carrito
                <span>
                  {{$productsCount}}
                </span>
                </a>
              </li>


              <li class="nav-item text-xs-center">
                <a href="{{url('/nosotros')}}" class="nav-link">Nosotros</a>
              </li>
              <li class="nav-item text-xs-center">
                <a href="{{url('/contacto')}}" class="nav-link active">Contacto</a>
              </li>
              @if (Auth::guest())
              <li class="nav-item text-xs-center hidden-sm-up">
                <a href="login.html" class="nav-link">Login</a>
              </li>
              @else
              <li class="nav-item text-xs-center hidden-sm-up">
                <a class="nav-link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                    
              </li>
              @endif

            </ul>
          </div>
          <div class="col-xs-12 col-md-6 offset-md-1 hidden-xs-down">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Encontro lo que buscaba?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      </nav>
      <div id="search-bar" class="container hidden-sm-up">
        <div class="row">
          <div class="col-xs">
            <form>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="¿Encontro lo que buscaba?"></input>
                <span class="input-group-btn">
                  <button class="btn btn-celperu" type="button">
                    <span class="hidden-sm-down">Buscar</span>
                    <i class="fa fa-search hidden-md-up"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>

    
    <!--/Menu-->


    <!--Contacto-->
        <div id="contacto-container">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                
                <h2><strong>CelularesPeru</strong></h2>
                 <p> Av Javier Prado 5227 dentro del local Sonax frente a club ACENESPAR al lado de plaza Camacho.</br> 
                  A 5 cuadras del óvalo de la Universidad de Lima.</p>
                <p><strong>Telefono:</strong> 326-6506</p>
                <p><strong>Celular:</strong> 987501482</p>
              </div>

              <div class="col-xs-12 col-md-8">
                <h2><strong>Ubicanos</strong></h2>
                <!--div id="gmap"-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.4917525941173!2d-76.96771044927667!3d-12.078450391404303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c65594456a43%3A0x62448505f9544d29!2sAv.+Javier+Prado+Este+5227%2C+Distrito+de+Lima+15023!5e0!3m2!1ses-419!2spe!4v1477432354005" class="mapa" width="800" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
              </div>

            </div>
            
          </div>
          
        </div>
    <!--/Contacto-->


    <!--Informacion-->
      <div id="info-container">
        <div id="container">
          <div class="row text-xs-center">
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/calidad.png')}}" alt="calidad" class="img-fluid">
              <h4>Calidad</h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/envio.png')}}"  alt="envio" class="img-fluid">
              <h4>Envio </h4>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="{{url('/CelularesPeru/imagenes/soporte.png')}}"  alt="soporte" class="img-fluid">
              <h4>Atencion 24h</h4>
            </div>
          </div>
        </div>
      </div>
    <!--/Informacion-->

    <!--Footer-->
    <footer id="footer-container">
      <div class="container">
        <div class="row text-xs-center text-md-left">
          <div class="col-md-4">
            <h4>CelularesPeru<h5>
            <p>Celular: 987501482</p>
            <p>Email: celulareperu@gmail.com</p>
            <p>Visitanos en: </p>
            <figure>
              <img src="{{url('/CelularesPeru/imagenes/redessociales.fw.png')}}" usemap="#Map">
              <map name="Map">
              <area shape="rect" coords="-2,2,42,46" href="https://www.facebook.com/" target="_blank">
              <area shape="rect" coords="66,3,107,39" href="https://www.twitter.com" target="_blank">
            </figure>
          </map>
          </div>
          <div class="col-md-3 offset-md-5">
            <h4>Navegacion</h4>
            <ul class="nav">
              <li class="nav-item">
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="catalogo.html" class="nav-link">Catalogo</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Carrito</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contacto</a>
              </li>
              <li class="nav-item">
                <a href="login.html" class="nav-link">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBWTqbyGQEG91zL0IeVEuPi3ZTGvji0TE8"></script>
  <script>
    init = function() {
      var addMarker, map, mapElement, mapOptions, myLatlng;
      myLatlng = new google.maps.LatLng(-12.058368, -77.051299);
      mapOptions = {
        zoom: 17,
        center: myLatlng,
        scrollwheel: false,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false
      };
      mapElement = document.getElementById('gmap');
      map = new google.maps.Map(mapElement, mapOptions);
      addMarker = function() {
        var marker;
        marker = new google.maps.Marker({
          map: map,
          position: myLatlng,
          draggable: false,
          title: 'Template CCL',
          icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
        });
      };
      google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(myLatlng);
      });
      addMarker();
    };

    google.maps.event.addDomListener(window, 'load', init);
  </script>

    <!--/Footer-->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>
  </body>
</html>