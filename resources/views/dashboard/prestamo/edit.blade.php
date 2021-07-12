
@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('prestamo.update', $prestamo->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.prestamo._form')
    </form>

@endsection