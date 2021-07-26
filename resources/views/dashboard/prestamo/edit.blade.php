
@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('prestamo.update', $prestamo->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.prestamo._form')
    </form>
    

<div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
    <hr>

    <form action="{{ route('prestamo.imagen', $prestamo) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
            <div class="col">
                <input type="file" name="image" value="{{ $prestamo->image }}"  class="form-control"> 
            </div>

            <div class="col">
                <input type="submit" value="Subir" class="btn btn-primary">
            </div>
        </div>
    </form>
<hr>
</div>

@endsection