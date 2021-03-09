@extends('layouts.app')

@section('content')

<div class="container">

@if (Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{
        Session::get('Mensaje')
    }}
</div>

@endif
<br>

<a href="{{url('alumnos/create')}}" class="btn btn-outline-primary">Agregar Alumno</a>
<a href="{{url('students')}}" class="btn btn-outline-primary">Buscar/Guardar</a>




<br><br>

<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>N&uacute;mero de control</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
            
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$alumno->NoCtrl}}</td>
            <td>{{$alumno->Nombre}}</td>
            <td>{{$alumno->Apaterno}}</td>
            <td>{{$alumno->Amaterno}}</td>
            <td>{{$alumno->Carrera}}</td>
            <td>

            <a class="btn btn-outline-success" href="{{url('/alumnos/'.$alumno->id.'/edit') }}">
            Editar
            </a>
                
                <form method="post" action="{{url('/alumnos/'.$alumno->id)}}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Estas seguro que deseas eliminar este dato? Una vez eliminado no podras recuperarlo.')">Borrar </button>
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



</div>



@endsection