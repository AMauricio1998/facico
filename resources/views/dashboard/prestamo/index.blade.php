


@extends('dashboard.master')

@section('content')
<a class="btn btn-primary mt-2 mb-2" href="{{ route('prestamo.create') }}"><i class="fa fa-1x fa-plus-square"></i> Crear prestamo </a>
<a class="btn btn-success mt-2 mb-2" href="{{ route('prestamo.all') }}"><i class="fa fa-1x fa-allergies"></i> Todos los prestamos </a>
{{--  <a class="btn btn-success mt-2 mb-2" href="{{ route('prestamo.export') }}"><i class="fa fa-1x fa-file-excel"></i> Exportar </a>  --}}

<form action="{{ route('prestamo.index') }}" class="form-inline mb-2">


    <select name="created_at" class="form-control ">
        <option value="DESC">Descendente</option>
        <option {{ request('created_at') == "ASC" ? "selected" : '' }} value="ASC">Ascendente</option>
    </select>

    <input type="text" value="{{ request('search') }}" name="search" placeholder="Buscar por nombre..." class="form-control ml-1">
    <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-1x fa-search"></i></button>

</form>



    <table class="table table-dark table-striped " style="border-radius: 10px; overflow: hidden;">

        <thead class="thead-dark text-center">
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
                {{--  <th>
                    Cuenta
                </th>  --}}
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
                {{--  <th>
                    Activo
                </th>  --}}
                {{--  <th>
                    Fecha de registro
                </th>  --}}
                <th>
                    Acciones
                </th>
            </th>
        </thead>

        <tbody class="text-center">
            @foreach ($prestamos as $prestamo )
            <tr>
                <td>{{$prestamo->id}}</td>
                <td>{{$prestamo->nombre}}</td>
                <td>{{$prestamo->apellidos}}</td>
                <td>{{$prestamo->telefono}}</td>
                {{--  <td>{{$prestamo->num_cuenta}}</td>  --}}
                <td>{{$prestamo->email}}</td>
                <td>{{$prestamo->licenciatura->nombre}}</td>
                <td>{{$prestamo->insumo}}</td>
                {{--  <td>{{$prestamo->fecha_pres}}</td>  --}}
                <td>{{$prestamo->created_at->format('d-m-Y')}}</td> 
                <td>{{$prestamo->hora_pres}}</td>
                <td>{{$prestamo->fecha_dev}}</td>
                <td>{{$prestamo->hora_dev}}</td>
                {{--  <td>{{$prestamo->activo}}</td>  --}}
                
                <td>

                    <a href="{{ route('prestamo.show', $prestamo->id) }}" class="btn btn-primary  submit btn-sm mt-2 ml-2 fa fa-1x fa-eye"></a>
                    <a href="{{ route('prestamo.edit', $prestamo->id) }}" class="btn btn-success  submit btn-sm mt-2 ml-2 fa fa-1x fa-edit"></a>
                    
                    <button data-toggle="modal" data-target="#deleteModal" 
                    data-id="{{ $prestamo->id }}" class="btn btn-danger  submit btn-sm mt-2 ml-2 fa fa-1x fa-trash-alt">
                    </button>

                    <button data-id="{{ $prestamo->id }}"
                        class=" mt-2 approved fa fa-1x a-fundo-alt btn btn-{{ $prestamo->activo == 1 ?  "success" : "danger" }}">
                        {{$prestamo->activo == 1 ? " Devolver ": " Devuelto "}}
                    </button>
                
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


        document.querySelectorAll(".approved").forEach(button => button. addEventListener("click", function(){
            console.log("Hola mundo: "+ button.getAttribute("data-id"))

            var id = button.getAttribute("data-id");

            var formData = new FormData();
            formData.append("_token", '{{ csrf_token() }}');

            fetch("{{ URL::to("/") }}/dashboard/prestamo/proccess/"+id,{
              method: 'POST',
              body: formData
            })
                          .then(response => response.json())
                          .then(approved => {
                            if(approved == 1){
                              button.classList.remove('btn-danger');
                              button.classList.add('btn-success');  
                              button.innerHTML = " Devolver ";
                            }else{
                              button.classList.remove('btn-success');
                              button.classList.add('btn-danger');
                              button.innerHTML = " Devuelto ";
                            }
                              });

            //$.ajax({
            //  method: "POST",
            //  url: "{{ URL::to("/") }}/dashboard/post-comment/proccess/"+id,
            //  data:{'_token': '{{ csrf_token() }}'}
            //})
            //  .done(function( approved ) {
            //      if(approved == 1){
            //        $(button).removeClass('btn-danger');
            //        $(button).addClass('btn-success');
            //        $(button).text("Aprobado");
            //      }else{
            //        $(button).addClass('btn-danger');
            //        $(button).removeClass('btn-success');
            //        $(button).text("Rechazado");
            //      }
            //  });

          }))


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

