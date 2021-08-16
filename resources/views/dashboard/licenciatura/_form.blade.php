<style>
    span.sname{
        position: relative;
        left: -90px;
        top: -30px;
        width: 140;
        padding: 6px;
        background: #e00;
        color: #fff;
        text-align: center;
        visibility: hidden;
        border-radius: 5px;
        opacity: 0.8;
        z-index: 999;
    }
    span.sname::after{
        content: '';
        position: absolute;
        left: 20%;
        top: 100%;
        width: 0;
        margin-left: -8px;
        height: 0;
        border-top: 8px solid #e00;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
    }
</style>
<script>
    $(document).ready(function(){
        $("#nombre").keyup(function(){
            var textname =$("#nombre").val();
            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            
            if(formato.test(textname)){ $("span.sname").css({"visibility": "hidden"}); }
            else{ $("span.sname").css({"visibility": "visible" }); }
        });
    });
</script>

    
        @csrf

        <div class="container-lg bg-white" style="width: 50rem; border-radius: 15px;">
            <hr>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <span id="sname" class="sname">El nombre solo puede contener letras</span>
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
    
        <script>

        </script>
    
