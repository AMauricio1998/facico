
@extends('layouts.app')

@section('content')

<script>
    $(document).ready(function(){
    //----------------------NOMBRE--------------------------------------
     $("#register").prop("disabled", true);

        $("#name").keyup(function(){
            var txtapp =$("#name").val();
            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            
            if(formato.test(txtapp)){ $("#sname").text("Es correcto !!").css({"color": "#0f0"}); }
            else{ $("#sname").text("El campo solo acepta letras !!").css({"color": "#f00"}); }
        });
    //------------------------Apellidos------------------------------------

        $("#surname").keyup(function(){
            var txtapp =$("#surname").val();
            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            
            if(formato.test(txtapp)){ $("#ssurname").text("Es correcto !!").css({"color": "#0f0"}); }
            else{ $("#ssurname").text("El campo solo acepta letras !!").css({"color": "#f00"}); }
        });
    //-------------------------EMAIL-----------------------------------
        $("#email").keyup(function(){
            var txtmail = $("#email").val();
            var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

            if(valmail.test(txtmail)){ $("#smail").text(" Valido ").css({"color": "#0f0"});             
        }
            else{ $("#smail").text("Incorrecto").css({"color": "#f00"}); 
        }
        });
    
     //--------------------------Email-----------------------------------------
     $("#email").keyup(function(){
        var txtmail = $("#email").val();
        var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

        if(valmail.test(txtmail)){ $("#smail").text(" Valido ").css({"color": "#0f0"});             
    }
        else{ $("#smail").text("Incorrecto").css({"color": "#f00"}); 
    }
    });
     //--------------------------Password-----------------------------------------
     $("#password_confirmation").keyup(function(){
        var txtpass1 = $("#password_confirmation").val();
        var txtpass2 = $("#password").val();

        if(txtpass1 == txtpass2){
            $("#pass").text("Las contraseñas coinciden");
            $("#pass").css({"color": "#0f0"});
            $("#register").prop("disabled", false);
        }
        else{
            $("#pass").text("Las contraseñas no coinciden");
            $("#pass").css({"color": "#f00"});
            $("#register").prop("disabled", true);
        }
    });
    //-----------------------------------------------------
    });    
    
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-size: large; font-family: fantasy;">
                    <img class="img-fluid mx-auto d-block rounded" 
                    src="{{ asset('images/1626209036.png') }}" />
                    {{ __('Register') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"  class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input  id="name" type="text" class="name form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                                <td><span id="sname" class="sname"></span></td>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Apellidos</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Apellidos">
                                <td><span id="ssurname" class="ssurname"></span></td>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@gmail.com">
                                <td><span id="smail" class="smail"></span></td>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirma tu contraseña</label>
                            
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirma tu contraseña">
                                <td><span id="pass" class="pass"></span></td>
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="register" name="register" class="register btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
