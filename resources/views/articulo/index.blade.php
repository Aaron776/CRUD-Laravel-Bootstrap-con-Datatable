@extends('layouts.plantillabase')
@section('css')
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('contenido')
    <h1>Articulos</h1>
    <a href="/articulos/create"class="btn btn-primary mb-3">Registrar Nuevo Articulo</a>
    <div class="table-responsive">
        <table id="articulos" class="table table-dark">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articulos as $index)
                    <tr class="">
                        <td>{{$index->id}}</td>
                        <td>{{$index->codigo}}</td>
                        <td>{{$index->descripcion}}</td>
                        <td>{{$index->cantidad}}</td>
                        <td>{{$index->precio}}</td>
                        <td>
                            <form action="{{route('articulos.destroy',$index->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/articulos/{{$index->id}}/edit" class="btn btn-warning">Editar</a>
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @section('js')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('#articulos').DataTable(
                        {
                            "lengthMenu":[[5,10,50,-1],[5,10,50,"Todos"]]
                        }
                    );
                })
            </script>
        @endsection
    </div>
    
 @endsection