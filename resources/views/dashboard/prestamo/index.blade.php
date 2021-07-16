


@extends('dashboard.master')

@section('content')

                   

<a class="btn btn-success" href="{{ route('prestamo.create') }}">Crear prestamo</a>

    <table class="table table-dark table-striped ">

        <thead class="thead-light text-center">
            <tr>
                <td>
                    id
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Apellidos
                </td>
                <td>
                    Telefono
                </td>
                <td>
                    Cuenta
                </td>
                <td>
                    Email
                </td>
                <td>
                    Licenciatura
                </td>
                <td>
                    Insumo
                </td>
                <td>
                    Fecha de prestamo
                </td>
                <td>
                    Hora de prestamo
                </td>
                <td>
                    Fecha de devolucion
                </td>
                <td>
                    Hora de devolucion
                </td>
                <td>
                    Fecha de registro
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($prestamos as $prestamo )
            <tr>
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
                <td>{{$prestamo->created_at->format('d-m-Y')}}</td>
                <td>
                    <a href="{{ route('prestamo.show', $prestamo->id) }}" class="btn btn-primary float-right submit btn-sm mt-1">Detalle</a>  
                    <a href="{{ route('prestamo.edit', $prestamo->id) }}" class="btn btn-success float-right submit btn-sm mt-1">Editar</a>                                 

                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $prestamo->id }}" class="btn btn-danger float-right submit btn-sm mt-1">Borrar</button>  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    

    {{ $prestamos->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Seguro de que quiere Borrar el registro seleccionado?</p>
                <p>El registro de borrara permanentemente</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            <form id="formDelete" action="{{ route('prestamo.destroy', 0) }}" data-action="{{ route('prestamo.destroy', 0) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>

            </div>
          </div>
        </div>
      </div>

      <script>
        window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            action = $('#formDelete').attr('data-action').slice(0,-1) 
            action += id
            console.log(action)

            $('#formDelete').attr('action', action)

            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar el registro con id  ' + id)
          })
        }
      </script>

@endsection

