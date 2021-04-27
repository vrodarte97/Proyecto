@extends('layouts.app')

@section('content')

    <div class="container">

        <strong><p>Sección para editar alumnos</p></strong><br><br>

        <form action="{{ url('/alumnos/' . $alumno->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            @include('alumnos.form',['Modo'=>'editar'])

        </form>

    </div>

@endsection
