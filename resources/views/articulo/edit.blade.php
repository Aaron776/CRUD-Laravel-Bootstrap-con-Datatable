@extends('layouts.plantillabase')
@section('contenido')
    <h1>Editar Articulo</h1>
    <form method="POST" action="/articulos/{{$articulo->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId" placeholder="" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descricpcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio"  step='any' id="precio" aria-describedby="helpId" placeholder="" value="{{$articulo->precio}}">
        </div>
        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection