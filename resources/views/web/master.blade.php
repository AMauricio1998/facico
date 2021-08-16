

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    {{-- //---------link para estilos css y js------- --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta name="csrf-token" content=" {{ csrf_token() }} ">
    {{-- //------------------------------------------ --}}
    <title>Modulo master de prestamos</title>

   
</head>
<body style="background-image: url('{{ asset('images/background.jpg')}}');">


    <div id="app" >
        @include('web.partials.nav-header-main')

            <div class="container mb-3 mt-3" style="display: flex; justify-content: center; align-items: center;">
                    @yield('content')
            </div>

        @include('web.partials.footer-main')
    </div>


    <script src="{{ asset("js/app.js") }}"></script>


</body>
</html>