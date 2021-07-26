
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <router-link class="navbar-brand" to="/"><img src="{{ asset('/images/1626209036.png')}}" height="50" width="60"></router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    

    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a href="{{ route('home') }}" class="text-white nav-link"><i class="fa fa-1x fa-home"></i> Home</a>
      </li>
      <li class="nav-item ">
        <router-link to="/licenciaturas" class="text-white nav-link"><i class="fa fa-1x fa-graduation-cap"></i> Licenciaturas</router-link>
      </li>
      
    </ul>


    <ul class="navbar-nav ">

      <li class="nav-item">
        
        <li class="nav-item"></li>

      <a class="nav-link fa fa-1x fa-sign-out-alt" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>


      </li>

      {{--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>

        </div>
      </li>  --}}

    </ul>

     

  </div>
</nav>


<div class="bg-dark2 text-center text-white p-2" style="background-color: rgba(253, 246, 246, 0.2);">
    
</div>