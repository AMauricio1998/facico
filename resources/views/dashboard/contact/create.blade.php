
@extends('dashboard.master')

@section('content')

    {{--  @include('dashboard.partials.validation-error')  --}}

    <form action="{{ route('contact.store') }}" method="POST">
        @include('dashboard.contact._form')
    </form>
    
@endsection