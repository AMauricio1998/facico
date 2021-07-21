

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content=" {{ csrf_token() }} ">

    {{-- //---------link para estilos css y js------- --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>
    {{-- //------------------------------------------ --}}
    <title>Modulo master de prestamos</title>

    <style>
        .size{
            width: 100px;
          }
    </style>
</head>
<body>

    @include('dashboard.partials.nav-header-main')

    <div class="container-fluid">
        @include('dashboard.partials.session-flash-status')
            @yield('content')
    </div>

</body>
</html>