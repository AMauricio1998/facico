
<script>
    $(document).ready(function(){
    //----------------------NOMBRE--------------------------------------
    {{-- $("#registrar").prop("disabled", true); --}}

        $("#name").keyup(function(){
            var txtapp =$("#name").val();
            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            
            if(formato.test(txtapp)){ $("#sname").text("Es correcto !!").css({"color": "#0f0"}); }
            else{ $("#sname").text("El campo solo acepta letras !!").css({"color": "#f00"}); }
        });
    //------------------------Apellidos------------------------------------

        $("#surname").keyup(function(){
            var txtapp =$("#surname").val();
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
     //-------------------------------------------------------------------
     $("#password1").keyup(function(){
        var txtpass2 = $("#password1").val();
        var txtpass1 = $("#password").val();

        if(txtpass1 == txtpass2){
            $("#pass").text("Correcto");
            $("#pass").css({"color": "#0f0"});
        }
        else{
            $("#pass").text("Las contraseñas no coinciden");
            $("#pass").css({"color": "#f00"});
        }
    });
     //-------------------------------------------------------------------
    });    
    
</script>
    
        @csrf
        <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
            <hr>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            <td><span id="sname" class="sname"></span></td>
            
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="surname">Apellidos</label>
            <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">
            <td><span id="ssurname" class="ssurname"></span></td>

            @error('surname')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
            <td><span id="smail" class="smail"></span></td>

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        @if($pasw)

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" value="{{ old('password', $user->password) }}">
            
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="password1">Confirma tu password</label>
            <input class="form-control" type="password" name="password1" id="password1" value="{{ old('password', $user->password) }}">
            <td><span id="pass" class="pass"></span></td>
        </div>

            
        @endif

       
        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" id="registrar" class="registrar" value="Registrar">
        </div>

        <hr>
        </div>
    
    
