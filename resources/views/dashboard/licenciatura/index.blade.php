


@extends('dashboard.master')

@section('content')

<a class="btn btn-success  mt-2  mb-2 " href="{{ route('licenciatura.create') }}"><i class="fa fa-x fa-plus-square"></i> Crear licenciatura</a>

    <table class="table table-dark table-striped " style="border-radius: 10px; overflow: hidden;">

        <thead class="thead-light text-center">
            <tr>
                <td>
                    id
                </td>
                <td>
                    Nombre
                </td>
                
                <td>
                    Fecha de registro
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
    
        <tbody class="text-center">
            @foreach ($licenciaturas as $licenciatura )
            <tr>
                <td>{{$licenciatura->id}}</td>
                <td>{{$licenciatura->nombre}}</td>
                <td>{{$licenciatura->created_at->format('d-m-Y')}}</td>

                <td>
                  <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $licenciatura->id }}" class="btn btn-danger float-right submit btn-sm mt-2 ml-2"><i class="fa fa-1x fa-trash-alt"></i></button>  

                  <a href="{{ route('licenciatura.edit', $licenciatura->id) }}" class="btn btn-success float-right submit btn-sm mt-2 ml-2"><i class="fa fa-1x fa-edit"></i></a>                                 
                    <a href="{{ route('licenciatura.show', $licenciatura->id) }}" class="btn btn-primary float-right submit btn-sm mt-2 ml-2"><i class="fa fa-1x fa-eye"></i></a>  

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    

    {{ $licenciaturas->links() }}

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
                <p>¿Seguro de que quiere borrar el registro seleccionado?</p>
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
            modal.find('.modal-title').text('Vas a borrar la licenciatura con id de ' + id)
          })
        }
      </script>

@endsection

