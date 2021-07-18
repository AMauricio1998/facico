
@extends('dashboard.master')

@section('content')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" readonly>
        </div>

        <div class="form-group">
            <label for="surname">Apellidos</label>
            <input class="form-control" type="surname" name="surname" id="surname" value="{{ $user->surname }}" readonly>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" readonly>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" value="{{ $user->password }}" readonly disabled>
        </div>
    
@endsection