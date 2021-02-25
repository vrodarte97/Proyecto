@extends('layouts.app')

@section('content')

<div class="container">

Sección para editar alumnos<br><br>

<form action="{{url('/alumnos/' .$alumno->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH') }}

    @include('alumnos.form',['Modo'=>'editar'])

</form>

</div>

@endsection
