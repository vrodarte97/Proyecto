@extends('layouts.app')

@section('head')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backoffice/bootstrap/css/bootstrap.min.css') }}">
    <!-- CSS personalizado --> 
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backoffice/datatables/datatables.min.css') }}">
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="{{ asset('assets/backoffice/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

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

{{--Ocultar boton agregar cuando este en producción--}}


<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{url('alumnos/create')}}" class="btn btn-success">Agregar Alumno</a>
      
        <form class="d-flex" style="display:inline">
        <input name= "buscarpor" class="form-control me-2" type="search" placeholder="Buscar por apellido" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      <form>
    </div>
  </nav>

<br><br>

<table id="table_example" class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>N&uacute;mero de control</th>
            <th>Nombre(s)</th>
            <!--Si voy a usar una solo columa comentar Apa, Ama-->
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <!--
        Delete all q please.
    <tbody>
        q@foreach($alumnos as $alumno)
            
        <tr>
            <td>{q{$loop->iteration}}</td>
            <td>{q{$alumno->NoCtrl}}</td>
            <td>{q{$alumno->Nombre}}</td>
            {{--<td>{{$alumno->Nombre}} {{$alumno->Apaterno}} {{$alumno->Amaterno}} </td>--}}
            <td>{q{$alumno->Apaterno}}</td>
            <td>{q{$alumno->Amaterno}}</td>
            <td>{q{$alumno->Carrera}}</td>
            <td>

            <a class="btn btn-outline-success" href="{q{url('/alumnos/'.$alumno->id.'/edit') }}">
            Editar
            </a>
                
                <form method="post" action="{q{url('/alumnos/'.$alumno->id)}}" style="display:inline">
                {q{csrf_field()}}
                {q{method_field('DELETE')}}
                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Estas seguro que deseas eliminar este dato? Una vez eliminado no podras recuperarlo.')">Borrar </button>
                </form> 
            </td>
        </tr>
        q@endforeach
    </tbody>
    -->
</table>



</div>



@endsection

@section('foot')
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="{{ asset('assets/backoffice/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/bootstrap/js/bootstrap.min.js') }}"></script>
      
    <!-- datatables JS -->
    <script src="{{ asset('assets/backoffice/datatables/datatables.min.js') }}"></script> 
     
    <!-- para usar botones en datatables JS -->  
    <script src="{{ asset('assets/backoffice/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/datatables/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>   
    <script src="{{ asset('assets/backoffice/datatables/Buttons-1.5.6/js/buttons.html5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            
            $('#table_example').DataTable({        
                "ajax": {
					"method": "GET",
                	"url": "{{ route('students.getAll') }}",
				},
				"columns": [
                    {"data":"ID"},
                    {"data":"NoCtrl"},
                    {"data":"Nombre"},
                    {"data":"Apaterno"},
                    {"data":"Amaterno"},
                    {"data":"Carrera"},
                    {"defaultContent":"<button class='btn btn-info'><i class='fas fa-edit'></i> Editar.</button> <button class='btn btn-danger'><i class='fas fa-user-minus'></i> Eliminar.</button>"}
				],
                //para usar los botones   
                responsive: "true",
                dom: 'Bfrtilp',       
                buttons:[
                    {
                        extend:    'excelHtml5',
                        text:      '<i class="fas fa-file-excel"></i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend:    'pdfHtml5',
                        text:      '<i class="fas fa-file-pdf"></i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend:    'print',
                        text:      '<i class="fa fa-print"></i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    },
                ]	        
            });     
        });
    </script>
@endsection