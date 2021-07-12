
@extends('dashboard.master')

@section('content')


        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $licenciatura->nombre }}" readonly>
        </div>

    
@endsection