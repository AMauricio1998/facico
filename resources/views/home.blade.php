@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="text-center ">You are logged in!</h1>
                <div class="card-header">
                    <img class="img-fluid mx-auto d-block rounded " src="{{ asset('images/nav.jpg') }} " style="width: 600px" />
                </div>

                <div class="card-body"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p class="text-center" style="font-family: 'Times New Roman', Times, serif">Bienvenido  {{ auth()->user()->name }}  {{ auth()->user()->surname }}</p>
                    <p class="text-center" style="font-family: 'Times New Roman', Times, serif">Eres usuario tipo {{ auth()->user()->rol->name }} </p>
                    
                   
                    <br>

                    <a class="dropdown-item text-center" style="font-size: large; font-family: fantasy">Contenido para usuarios</a>
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="/">Lista de prestamos</a>
                            </li>
                          </ul>



                    @if(auth()->user()->rol->key == 'admin')
                    
                        <a class="dropdown-item text-center" style="font-size: large; font-family: fantasy">Contenido solo para administrador</a>
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="{{ route('prestamo.index') }}">Prestamos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('licenciatura.index') }}">Licenciaturas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link "  href="{{ route('user.index') }}">Usuario</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="#" >Inventario</a>
                            </li>
                          </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
