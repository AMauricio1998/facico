
@extends('dashboard.master')

@section('content')

    {{--  @include('dashboard.partials.validation-error')  --}}

    <form action="{{ route('licenciatura.store') }}" method="POST">
        @include('dashboard.licenciatura._form')
    </form>
    
@endsection