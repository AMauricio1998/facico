
@extends('dashboard.master')

@section('content')

        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $prestamo->nombre) }}">
            
            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="apellidos">Email</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', $prestamo->apellidos)}}">

            @error('apellidos')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="telefono">Asunto</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="{{ old('telefono', $prestamo->telefono)}}">

            @error('telefono')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="num_cuenta">Mensaje</label>
            <input class="form-control" type="text" name="num_cuenta" id="num_cuenta" value="{{ old('num_cuenta', $prestamo->num_cuenta)}}">

            @error('num_cuenta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Enviar">
        </div>

        @endsection