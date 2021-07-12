
@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('licenciatura.update', $licenciatura->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.licenciatura._form')
    </form>

@endsection