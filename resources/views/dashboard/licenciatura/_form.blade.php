

    
        @csrf

        <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
            <hr>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $licenciatura->nombre) }}">
            
            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>

        <hr>
        </div>
    
    
