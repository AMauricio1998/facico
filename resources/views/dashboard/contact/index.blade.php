@extends('dashboard.master')

@section('content')<br>
<a class="btn btn-primary mt-2 mb-2" href="{{ route('contact.create') }}"><i class="fa fa-1x fa-plus-square"></i> Crear contacto </a>

    <table class="table table-dark table-striped " style="border-radius: 10px; overflow: hidden;">

        <thead class="thead-light text-center">
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Apellido
                </td>
                <td>
                    Email
                </td>
                <td>
                    Creacion
                </td>
                <td>
                    Actualizacion
                </td>
                <td>
                    Acciones
                </td>
            </tr>       
        </thead>
        <tbody class="text-center">
            @foreach ($contacts as $contact)
            <tr>
                <td>
                    {{ $contact->id }}
                </td>
                <td>
                    {{ $contact->name }}
                </td>
                <td>
                    {{ $contact->surname }}
                </td>
                <td>
                    {{ $contact->email }}
                </td>
                <td>
                    {{ $contact->created_at->format('d-M-Y') }}
                </td>
                <td>
                    {{ $contact->updated_at->format('d-M-Y') }}
                </td>
                <td>
                    <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-primary mt-2 ml-2 fa fa-1x fa-eye"></a>
                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-success  submit btn-sm mt-2 ml-2 fa fa-1x fa-edit"></a>

                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{  $contact->id }}" class="btn btn-danger mt-2 ml-2 fa fa-1x fa-trash-alt"></button>
                    
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>


    {{ $contacts->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Seguro que deseas borrar el registro seleccionado?</p>

              <p>El registro de borrara permanentemente</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

              <form action="{{ route('contact.destroy', 0) }}" data-action="{{ route('contact.destroy', 0) }}" method="POST" id="formDelete">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>

      <script>
            window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            console.log("Modal abierto")
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            action = $('#formDelete').attr('data-action').slice(0,-1)
            action += id
            console.log(action)

            $('#formDelete').attr('action', action)

            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar el contacto el id de ' + id)
          })
            }
      </script>

@endsection