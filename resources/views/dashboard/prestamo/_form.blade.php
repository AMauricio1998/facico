
        @csrf
    <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
        <hr>
        <div class="form-group mt-4">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $prestamo->nombre) }}">
            
            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', $prestamo->apellidos)}}">

            @error('apellidos')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="{{ old('telefono', $prestamo->telefono)}}">

            @error('telefono')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="num_cuenta">Numero de cuenta</label>
            <input class="form-control" type="text" name="num_cuenta" id="num_cuenta" value="{{ old('num_cuenta', $prestamo->num_cuenta)}}">

            @error('num_cuenta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $prestamo->email)}}">

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
            <input class="form-control" type="number" value="1" name="activo" id="activo" value="{{ old('activo', $prestamo->activo)}}">

            @error('activo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
        <hr>
    </div>