@extends('layouts.app')

@section('content')

    <div class="container">
        Sección para editar alumnos
        <br><br>

        @if (count($errors) > 0)

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{ url('/aspirantes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('aspirantes.form',['Modo'=>'crear'])
            <br>


        </form>

    </div>

@endsection
