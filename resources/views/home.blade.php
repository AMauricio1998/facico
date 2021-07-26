@extends('layouts.app')


@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" >
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Bienvenido  {{ auth()->user()->name }}  {{ auth()->user()->surname }}</h3>
                <div class="card-header">
                    <img class="img-fluid mx-auto d-block rounded " src="{{ asset('images/nav.jpg') }} " style="width: 600px" />
                </div>

                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h4 class="text-center" style="font-family: 'Times New Roman', Times, serif">Eres usuario tipo {{ auth()->user()->rol->name }} </h4>
                    
                   

                    <a class="dropdown-item text-center" style="font-size: large; font-family: fantasy">Contenido para usuarios</a>
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="/">Lista de prestamos</a>
                            </li>
                          </ul>



                    @if(auth()->user()->rol->key == 'admin')
                    
                        <a class="dropdown-item text-center" style="font-size: large; font-family: fantasy">Contenido solo para administrador</a>
                        
                        <nav class="navbar navbar-light bg-light justify-content-center">
                          <form class="form-inline">
                            <a class="btn btn-outline-success" href="{{ route('prestamo.index') }}"  type="button">Prestamos</a>
                            <a class="btn btn-outline-primary" href="{{ route('licenciatura.index') }}" type="button">Licenciaturas</a>
                            <a class="btn btn-outline-secondary" href="{{ route('user.index') }}" type="button">Usuario</a>
                          </form>
                        </nav>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>

@include('web.partials.footer-main')

@endsection


