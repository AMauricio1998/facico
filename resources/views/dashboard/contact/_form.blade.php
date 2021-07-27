

    
        @csrf

        <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
            <hr>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $contact->name) }}">
            
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="surname">Apellidos</label>
            <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', $contact->surname) }}">
            
            @error('surname')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $contact->email) }}">
            
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="message">Contenido</label>
            <textarea class="form-control" id="message" name="message" rows="3">{{ old('message',$contact->message) }}</textarea>

            @error('message')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Registrar">
        </div>

        <hr>
        </div>
    
    
