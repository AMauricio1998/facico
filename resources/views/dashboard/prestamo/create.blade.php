
@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('prestamo.store') }}" method="POST">
        @include('dashboard.prestamo._form')
    </form>
    
@endsection