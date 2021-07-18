


@extends('dashboard.master')

@section('content')

<a class="btn btn-success" href="{{ route('user.create') }}">Crear usuario</a>

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
                  Email
                </td>
                <td>
                  Rol
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
            @foreach ($users as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->rol->key}}</td>
                <td>{{$user->created_at->format('d-m-Y')}}</td>
                <td>
                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary float-right submit btn-sm mt-1">Detalle</a>  
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success float-right submit btn-sm mt-1">Editar</a>                                 

                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}" class="btn btn-danger float-right submit btn-sm mt-1">Borrar</button>  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    

    {{ $users->links() }}

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

            <form id="formDelete" action="{{ route('user.destroy', 0) }}" data-action="{{ route('user.destroy', 0) }}" method="POST">
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

