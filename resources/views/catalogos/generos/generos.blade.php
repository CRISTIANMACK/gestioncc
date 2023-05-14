@extends('layouts.plantilla')

@section('title','Generos')

@section('head','GENEROS')

@section('css')
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
@endsection

@section('js')
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
@endsection

@section('content')
    <div>
        <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <table class="row-border hover" id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>GENERO</th>
                        <th>ACCIONES</th>   
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#" class="bg-transparent hover:bg-red-600 text-red-700 font-semibold hover:text-white py-1 px-1 border border-red-500 hover:border-transparent rounded"><i class="fi fi-rr-trash"></i></a>
                            <a href="#" class="bg-transparent hover:bg-blue-600 text-blue-700 font-semibold hover:text-white py-1 px-1 border border-blue-500 hover:border-transparent rounded"><i class="fi fi-rr-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>nombre del genero</td>
                        <td>
                            <a href="#"><i>e</i></a>
                            <a href="#"><i>d</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
@endsection

@section('script')
<script>
    let table = new DataTable('#myTable',{
        language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });
</script>
@endsection