
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <router-link class="navbar-brand" to="/"><img src="https://www.facico-uaemex.mx/2018-2022/sitio/sitio/img/areas/uaem-facico.png" height="50" width="60"></router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    

    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a href="{{ route('home') }}" class="text-white nav-link">Home</a>
      </li>
      <li class="nav-item ">
        <router-link to="/licenciaturas" class="text-white nav-link">Licenciaturas</router-link>
      </li>
      
    </ul>


    <ul class="navbar-nav ">

      <li class="nav-item">
        
        <li class="nav-item"></li>

      <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>


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