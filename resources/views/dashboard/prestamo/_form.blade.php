
<script>
    $(document).ready(function(){
    //----------------------NOMBRE--------------------------------------
    {{-- $("#registrar").prop("disabled", true); --}}

        $("#nombre").keyup(function(){
            var txtapp =$("#nombre").val();
            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            
            if(formato.test(txtapp)){ $("#sname").text("Es correcto !!").css({"color": "#0f0"}); }
            else{ $("#sname").text("El campo solo acepta letras !!").css({"color": "#f00"}); }
        });
    //------------------------Apellidos------------------------------------

        $("#apellidos").keyup(function(){
            var txtapp =$("#apellidos").val();
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
     //---------------------Telefono solo 10 digitos----------------------------------------------
     $(function(){
        var numbers  = new RegExp("^(?=.*[0-9])");
        var len      = new RegExp("^(?=.{10,})");

        var regExp = [numbers, len];
        var elementos = [$("#numbers"),$("#len")];
        

        $("#telefono").on("keyup", function(){
            var pass = $("#telefono").val();
            var check = 0;

            for(var i = 0; i < 2; i++){
                if(regExp[i].test(pass)){
                    elementos[i].hide().css({"border": "1px solid #f00"});
                    check++;
                }
                else{
                    elementos[i].show();
                }
            }
            if(check == 2 ){
                $("#mensaje").text("Correcto").css({"color": "#0f0"});
            }else{
                $("#mensaje").text("El telefono debe contener 10 digitos").css({"color": "#f00"});           
            }
        });
    });
     //--------------------------Matricula 7 digitos-----------------------------------------
     $(function(){
        var numbers  = new RegExp("^(?=.*[0-9])");
        var len      = new RegExp("^(?=.{7,})");

        var regExp = [numbers, len];
        var elementos = [$("#numbers"),$("#len")];
        

        $("#num_cuenta").on("keyup", function(){
            var pass = $("#num_cuenta").val();
            var check = 0;

            for(var i = 0; i < 2; i++){
                if(regExp[i].test(pass)){
                    elementos[i].hide().css({"border": "1px solid #f00"});
                    check++;
                }
                else{
                    elementos[i].show();
                }
            }
            if(check == 2 ){
                $("#mensajeCuenta").text("Correcto").css({"color": "#0f0"});
            }else{
                $("#mensajeCuenta").text("La cuenta debe de contener solo 7 digitos").css({"color": "#f00"});           
            }
            if($("#num_cuenta").val().length >= 8){
                $("#mensajeCuenta").text("La cuenta debe de contener solo 7 digitos").css({"color": "#f00"});
            }
        });
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
     //--------------------------Email-----------------------------------------
    });    
    
</script>

        @csrf
    <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
        <hr>
        <div class="form-group mt-4">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $prestamo->nombre) }}">
            <td><span id="sname" class="sname"></span></td>

            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', $prestamo->apellidos)}}">
            <td><span id="ssurname" class="ssurname"></span></td>

            @error('apellidos')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="tel" name="telefono" id="telefono"  value="{{ old('telefono', $prestamo->telefono)}}">
            <td><span id="mensaje"></span></td>

            @error('telefono')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="num_cuenta">Numero de cuenta</label>
            <input class="form-control" type="text" name="num_cuenta" id="num_cuenta" value="{{ old('num_cuenta', $prestamo->num_cuenta)}}">
            <td><span id="mensajeCuenta"></span></td>
            @error('num_cuenta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $prestamo->email)}}">
            <td><span id="smail" class="smail"></span></td>

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="licenciatura_id">Licenciatura</label>
                <select class="form-control" name="licenciatura_id" id="licenciatura_id">
                    @foreach($licenciaturas as $nombre => $id )
                        <option {{ $prestamo->licenciatura_id == $id ? 'selected="selected"' : '' }}  value="{{$id}}"> {{$nombre}} </option>
                    @endforeach
                </select>
            @error('licenciatura_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="insumo">Insumo</label>
            <input class="form-control" type="text" name="insumo" id="insumo" value="{{ old('insumo', $prestamo->insumo)}}">

            @error('insumo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="fecha_pres">Fechad de prestamo</label>
            <input class="form-control" type="date" name="fecha_pres" id="fecha_pres" value="{{ old('fecha_pres', $prestamo->fecha_pres)}}">

            @error('fecha_pres')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="hora_pres">Hora de prestamo</label>
            <input class="form-control" type="time" name="hora_pres" id="hora_pres" value="{{ old('hora_pres', $prestamo->hora_pres)}}">

            @error('hora_pres')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="fecha_dev">Fechad de devolucion</label>
            <input class="form-control" type="date" name="fecha_dev" id="fecha_dev" value="{{ old('fecha_dev', $prestamo->fecha_dev)}}">

            @error('fecha_dev')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="hora_dev">Hora de devolucion</label>
            <input class="form-control" type="time" name="hora_dev" id="hora_dev" value="{{ old('hora_dev', $prestamo->hora_dev)}}">

            @error('fecha_dev')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="hora_dev">Activo</label>
            <input disabled class="form-control" type="number" value="1" name="activo" id="activo" value="{{ old('activo', $prestamo->activo)}}">

            @error('activo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
        <hr>
    </div>