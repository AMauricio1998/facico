
@extends('dashboard.master')

@section('content')

    {{-- @include('dashboard.partials.validation-error') --}}

    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.contact._form')
    </form>

@endsection