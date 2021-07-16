
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}"><img src="https://www.facico-uaemex.mx/2018-2022/sitio/sitio/img/areas/uaem-facico.png" height="50" width="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    

    <ul class="navbar-nav mr-auto">
      <a class="nav-link" href="#">Bienvenido {{ Session::get('session_name' )}}</a>
      @if(empty(session('session_tipo') == 2))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CRUD
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('prestamo.index') }}">Prestamos</a>
          <a class="dropdown-item" href="{{ route('licenciatura.index') }}">Licenciaturas</a>
          <a class="dropdown-item" href="#">Usuarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Inventario</a>
        </div>
      </li>
      @endif
    </ul>

    <ul class="navbar-nav ">

      <li class="nav-item">
        @if(empty(session('session_id')))
        <a class="nav-link" href="#">Login <span class="sr-only"></span></a>
        @else
        <li class="nav-item"></li>
        <a class="nav-link" href="{{ route('logout') }}">Logout <span class="sr-only"></span></a>
        @endif
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>

        </div>
      </li>

    </ul>

     

  </div>
</nav>
