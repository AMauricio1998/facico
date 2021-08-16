
@extends('dashboard.master')

@section('content')

<div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
    <hr>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $licenciatura->nombre }}" readonly>
        </div>
    <hr>
</div>
    
@endsection