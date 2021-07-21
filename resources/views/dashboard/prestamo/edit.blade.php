
@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('prestamo.update', $prestamo->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.prestamo._form')
    </form>
    
<br>


    <form action="{{ route('prestamo.imagen', $prestamo) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col">
                <input type="file" name="image"  class="form-control"> 
            </div>

            <div class="col">
                <input type="submit" value="Subir" class="btn btn-primary">
            </div>
        </div>
    </form>
_form

@endsection