@extends('layouts.app')

@section('head')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backoffice/bootstrap/css/bootstrap.min.css') }}">
    <!-- CSS personalizado -->

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backoffice/datatables/datatables.min.css') }}">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/backoffice/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">

    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')

    <div class="container">

        @if (Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Mensaje') }}
            </div>

        @endif
        <br>

        <a href="{{ url('dashboard') }}" type="button" class="btn btn-primary" style="background-color: #1B396A;" >Inicio</a><br><br>

        <table id="table_example" class="table table-light table-hover">

            <thead >
                <tr style="background-color: #1B396A;">
                    <th style="color:#ffffff">#</th>
                    <th style="color:#ffffff">N&uacute;mero de control</th>
                    <th style="color:#ffffff">Nombre(s)</th>
                    <th style="color:#ffffff">Apellido Paterno</th>
                    <th style="color:#ffffff">Apellido Materno</th>
                    <th style="color:#ffffff">Carrera</th>
                </tr>
            </thead>
            <tbody>

            </tbody>

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
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "NoCtrl"
                    },
                    {
                        "data": "Nombre"
                    },
                    {
                        "data": "Apaterno"
                    },
                    {
                        "data": "Amaterno"
                    },
                    {
                        "data": "Carrera"
                    },
                ],
                //para usar los botones   
                responsive: "true",
                dom: 'Bfrtilp',
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    },
                ]
            });
        });

    </script>
@endsection
