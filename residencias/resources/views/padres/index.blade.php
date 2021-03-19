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

<a href="{{url('padres/create')}}" class="btn btn-outline-primary">Agregar padre</a>
<a href="{{url('dads')}}" class="btn btn-outline-primary">Buscar/Guardar</a>




<br><br>

<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre(s) Del Padre</th>
            <th>N&uacute;mero de control</th>
            <th>Nombre(s) Del Alumno</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($padres as $padre)
            
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$padre->NombrePadre}} {{$padre->ApaternoPadre}} {{$padre->AmaternoPadre}}</td>
            <td>{{$padre->NoCtrl}}</td>
            <td>{{$padre->NombreAlumno}} {{$padre->ApaternoAlumno}} {{$padre->AmaternoAlumno}}</td>
            <td>{{$padre->Carrera}}</td>
            <td>

            <a class="btn btn-outline-success" href="{{url('/padres/'.$padre->id.'/edit') }}">
            Editar
            </a>
                
                <form method="post" action="{{url('/padres/'.$padre->id)}}" style="display:inline">
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