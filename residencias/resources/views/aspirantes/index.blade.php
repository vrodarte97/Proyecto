@extends('layouts.app')

@section('content')

    <div class="container">

        @if (Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Mensaje') }}
            </div>

        @endif
        <br>

        <a href="{{ url('aspirantes/create') }}" type="button" class="btn btn-primary" style="background-color: #1B396A;" >Agregar Alumno</a>
        <a href="{{ url('students1') }}" type="button" class="btn btn-primary" style="background-color: #1B396A;" >Buscar/Guardar</a>




        <br><br>

        <table class="table table-light table-hover">

            <thead>
                <tr style="background-color: #1B396A;">
                    <th style="color:#ffffff">#</th>
                    <th style="color:#ffffff">Nombre(s)</th>
                    <th style="color:#ffffff">Apellido Paterno</th>
                    <th style="color:#ffffff">Apellido Materno</th>
                    <th style="color:#ffffff">Correo</th>
                    <th style="color:#ffffff">Escuela de Procedencia</th>
                    <th style="color:#ffffff">Carrera de Interes</th>
                    <th style="color:#ffffff">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirantes as $aspirante)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $aspirante->Nombre }}</td>
                        <td>{{ $aspirante->Apaterno }}</td>
                        <td>{{ $aspirante->Amaterno }}</td>
                        <td>{{ $aspirante->Correo }}</td>
                        <td>{{ $aspirante->Escuela }}</td>
                        <td>{{ $aspirante->Carrera }}</td>
                        <td>

                            <a class="btn btn-outline-success" href="{{ url('/aspirantes/' . $aspirante->ID . '/edit') }}">
                                Editar
                            </a>

                            <!--form method="post" action="{{ url('/aspirantes/' . $aspirante->ID) }}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Estas seguro que deseas eliminar este dato? Una vez eliminado no podras recuperarlo.')">Borrar </button>
                    </form-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>



@endsection
