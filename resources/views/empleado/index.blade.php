@extends('layouts.app')

@section('content')
<div class="container">

<div class="">
    @if (Session::has('mensaje'))
    {{ Session::get('mensaje')}}    
@endif
</div>

<a href="{{url('empleado/create')}}" class="btn btn-success">Nuevo empleado</a>

<table class="table table-striped table-responsive mt-2">
    <thead>
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Edit</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
            </td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-primary"> 
                    Editar
                </a>
            </td>
            <td>
                <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar" class="btn btn-danger">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection