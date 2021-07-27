<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exportar a PDF</title>

    <style>
        p{
            text-align: start;
            text-transform: uppercase;
            font-size: 9px;
            }
            .contenido{
            font-size: 9px;
            }
            td{
                border: rgba(0, 0, 3, 0.555) 1px solid;
            }
    </style>
</head>
<body>
    <htmlpageheader name="myHeader1">
        <section id="page-header">
            <a href="#"><img style="width: 70px; height: 70px;" src="{{ asset('images/1626209036.png')}}" alt="Logo UAEM"></a>
            <p>Facultad de Ciencias de la Conducta</p>
            <p >Dia de impresion {{ $today }}</p>
            <p>Prestamos hechos en el centro de computo</p>
        </section>
    </htmlpageheader>

    
    
    <table class="contenido table table-dark table-striped ">

        <thead class="thead-dark text-center" style="background-color: gray; ">
            <tr>
                <th>
                    id
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellidos
                </th>
                <th>
                    Telefono
                </th>
                  <th>
                    Cuenta
                </th>  
                <th>
                    Email
                </th>
                <th>
                    Licenciatura
                </th>
                <th width="10%">
                    Insumo
                </th>
                <th width="10%">
                    Fecha de prestamo
                </th>
                <th>
                    Hora de prestamo
                </th>
                <th width="8.8%">
                    Fecha de devolucion
                </th>
                <th>
                    Hora de devolucion
                </th> 
                   
                <th>
                    Activo
                </th>
            </th>
        </thead>

        <tbody class="text-center" style="text-align: center">
            @foreach ($prestamos as $prestamo )
            <tr class="text-center">
                <td>{{$prestamo->id}}</td>
                <td>{{$prestamo->nombre}}</td>
                <td>{{$prestamo->apellidos}}</td>
                <td>{{$prestamo->telefono}}</td>
                <td>{{$prestamo->num_cuenta}}</td>  
                <td>{{$prestamo->email}}</td>
                <td>{{$prestamo->licenciatura->nombre}}</td>
                <td>{{$prestamo->insumo}}</td>
                <td>{{$prestamo->fecha_pres}}</td>  
                <td>{{$prestamo->hora_pres}}</td>
                <td>{{$prestamo->fecha_dev}}</td>
                <td>{{$prestamo->hora_dev}}</td>
                <td>{{$prestamo->activo == 1 ? "No devuelto": " Devuelto "}}</td>  

            </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>