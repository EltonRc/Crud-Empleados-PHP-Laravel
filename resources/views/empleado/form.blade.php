    
    @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div>
        <label for="Nombre" class="form-label fw-bold">Nombre</label>
        <input type="text" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" name="Nombre" class="form-control">
    </div>
    <div class="mt-3">
        <label for="ApellidoPaterno" class="form-label fw-bold">Apellido Paterno</label>
    <input type="text" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" name="ApellidoPaterno" class="form-control">
    </div>

    <div class="mt-3">
    <label for="ApellidoMaterno" class="form-label fw-bold">Apellido Materno</label>
    <input type="text" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" name="ApellidoMaterno" class="form-control">
    </div>

    <div class="mt-3">
    <label for="Correo" class="form-label fw-bold">Correo</label>
    <input type="email" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" name="Correo" class="form-control">
    </div>

    <div class="mt-3">
        @if (isset($empleado->Foto))
        <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
        @endif
        
        <input type="file" name="Foto" class="form-control mt-2">
    </div>

    <div class="mt-3">
        <input type="submit" value="{{ $modo }} datos" class="btn btn-dark">

        <a href="{{url('empleado')}}" class="btn btn-info">Regresar</a>
    </div>