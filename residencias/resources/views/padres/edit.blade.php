@extends('layouts.app')

@section('content')

<div class="container">

Sección para editar padres<br><br>

<form action="{{url('/padres/' .$padre->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH') }}

    @include('padres.form',['Modo'=>'editar'])

</form>

</div>

@endsection
