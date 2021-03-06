@extends('dashboard.master')

@section('content')

<div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
    <hr>

<div class="form-group">
    <label for="title">Nombre</label>
    <input readonly class="form-control" type="text"  value="{{ $contact->name }}">
</div>

<div class="form-group">
    <label for="url_clean">Apellido</label>
    <input readonly class="form-control" type="text"  value="{{ $contact->surname }}">
</div>

<div class="form-group">
    <label for="url_clean">Email</label>
    <input readonly class="form-control" type="text"  value="{{ $contact->email }}">
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea readonly class="form-control"  rows="3">{{ $contact->message }}</textarea>
</div>

<hr>
</div>


@endsection
