
@extends('dashboard.master')

@section('content')


        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $prestamo->nombre }}" readonly>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ $prestamo->apellidos }}" readonly>
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="{{ $prestamo->telefono }}" readonly>
        </div>

        <div class="form-group">
            <label for="num_cuenta">Numero de cuenta</label>
            <input class="form-control" type="text" name="num_cuenta" id="num_cuenta" value="{{ $prestamo->num_cuenta }}" readonly>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $prestamo->email }}" readonly>
        </div>

        <div class="form-group">
            <label for="licenciatura_id">licenciatura</label>
            <input class="form-control" type="text" name="licenciatura_id" id="licenciatura_id" value="{{ $prestamo->licenciatura->nombre }}" readonly>
        </div>

        <div class="form-group">
            <label for="insumo">Insumo</label>
            <input class="form-control" type="text" name="insumo" id="insumo" value="{{ $prestamo->insumo }}" readonly>
        </div>

        <div class="form-group">
            <label for="fecha_pres">Fechad de prestamo</label>
            <input class="form-control" type="date" name="fecha_pres" id="fecha_pres" value="{{ $prestamo->fecha_pres }}" readonly>
        </div>

        <div class="form-group">
            <label for="hora_pres">Hora de prestamo</label>
            <input class="form-control" type="time" name="hora_pres" id="hora_pres" value="{{ $prestamo->hora_pres }}" readonly> 
        </div>

        <div class="form-group">
            <label for="fecha_dev">Fechad de devolucion</label>
            <input class="form-control" type="date" name="fecha_dev" id="fecha_dev" value="{{ $prestamo->fecha_dev }}" readonly>
        </div>

        <div class="form-group">
            <label for="hora_dev">Hora de devolucion</label>
            <input class="form-control" type="time" name="hora_dev" id="hora_dev" value="{{ $prestamo->hora_dev }}" readonly>
        </div>

        <div class="form-group">
            <label for="hora_dev">Activo</label>
            <input class="form-control" type="number" value="1" name="activo" id="activo" value="{{ $prestamo->activo }}" readonly>
        </div>    
    
@endsection