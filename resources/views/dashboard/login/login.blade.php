<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>

    

    <title>Login</title>
</head>
<body style="background-image: url('{{ asset('images/fondologin.jpg')}}');">


    <main role="main" class="container my-auto">
        <div class="row">
            <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                col-12">

                
                    @if(Session::has('message'))
                        <div class="alert alert-info text-center" role="alert">
                            {!! Session::get('message') !!}
                        </div>
                    @endif
                


                <h2 class="text-center text-capitalize"> Bienvenido </h2>
                <img class="img-fluid mx-auto d-block rounded"
                    src="{{ asset('images/1626209036.png') }}" />

                <form action="{{ route('validar') }}" method="POST" name="login">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input id="email" name="email"
                            class="form-control" type="email"
                            placeholder="Correo electrónico">
                    </div>

                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input id="pass" name="pass"
                            class="form-control" type="password"
                            placeholder="Contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">
                        Entrar
                    </button>
                    <br>


                    
                </form>
            </div>
        </div>
    </main>


</body>
</html>